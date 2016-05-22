var nav = document.getElementById('navTray');
var img = $('#navArrow');
var offset = img.offset();
var curSection = '#home';
var searching = false;
var navHidden = true;

// -----Element Functions-----
function expandTray(){
  // Enable nav arrow tracking
  $(document).mousemove(rotate);
  $('#startHere').fadeOut();
  if(searching)
    $('#navArrow, #navExit, #navHistory, #navQuote').fadeIn();
  else
    $('#navArrow, #navSearch, #navHistory, #navQuote').fadeIn();
  $('#navTray').removeClass('closed');
  // Reset CSS animation on element
  nav.offsetWidth = nav.offsetWidth;
  $('#navTray').addClass('open');
  navHidden = false;
}

function hideTray(){
  // Disable nav arrow tracking
  $(document).off("mousemove", rotate);
  if(searching)
    $('#navArrow, #navExit, #navHistory, #navQuote').fadeOut(150);
  else
    $('#navArrow, #navSearch, #navHistory, #navQuote').fadeOut(150);
  $('#navTray').removeClass('open');
  // Reset CSS animation on element
  nav.offsetWidth = nav.offsetWidth;
  $('#navTray').addClass('closed');
  navHidden = true;
}

function showSection(elem){
  $('#home, #results, #history, #quote').fadeOut().promise().done(function(){
    $(elem).fadeIn();
  });
  curSection = elem;
}

function highlight(elem){
  $('#navExit, #navSearch, #navHistory, #navQuote').removeClass('highlighted');
  $(elem).addClass('highlighted');
}


// -----Nav arrow rotation-----
function rotate(evt){
    var imgX = (offset.left) + (img.width()/2);
    var imgY = (offset.top) + (img.height()/2);
    var radians = Math.atan2(evt.pageX - imgX, (evt.pageY - $(window).scrollTop()) - imgY);
    var deg = (radians * (180 / Math.PI) * -1) + 45;
    if(deg <= -15){
      if(searching)
        highlight('#navExit');
      else
        highlight('#navSearch');
      if (deg < -48)
        deg = -48;
    }
    else if(deg <= 18)
      highlight('#navHistory');
    else {
      highlight('#navQuote');
      if (deg > 47)
        deg = 47;
    }
    img.css('-moz-transform', 'rotate('+deg+'deg)');
    img.css('-webkit-transform', 'rotate('+deg+'deg)');
    img.css('-o-transform', 'rotate('+deg+'deg)');
    img.css('-ms-transform', 'rotate('+deg+'deg)');
}

// -----Search/Query AJAX-----
function query(term, dest=curSection){
  $.ajax({
    type: 'GET',
    url: '/php/query.php',
    data: {query: term},
    dataType: 'json',
    success: function(response){
      if (response['result'] == 'list'){
        var table = '<h2>Search Results</h2>'+
                    '<h3>'+Object.keys(response.data).length+' Results for: '+term+'</h3>'+
                    '<table class="table-fill">'+
                      '<thead>'+
                        '<tr>'+
                          '<th>Company</th>'+
                          '<th>Symbol</th>'+
                          '<th>Action</th>'+
                        '</tr>'+
                      '</thead>'+
                      '<tbody class="table-hover">';
        $.each(response.data, function(company, sym) {
          table += '<tr>'+
                      '<td>'+company+'</td>'+
                      '<td>'+sym+'</td>'+
                      '<td>'+
                        '<button type="button" class="results-button" data-dest="#quote">Quote</button>'+
                        '<button type="button" class="results-button" data-dest="#history">History</button>'+
                      '</td>'+
                    '</tr>';
        });
        table += '</tbody>'+
                '</table>';

        // Write table HTML
        $('#results').html(table)

        // Attach event handlers
        $('.results-button').click(function(){
          alert($(this).attr('data-dest'));
          query($(this).closest('tr').find('td:eq(1)').text(), $(this).attr('data-dest'));
        });

        showSection('#results');
      }
      else if (response['result'] == 'single'){
        //fill quote
        //fill history
        showSection(dest);
      }
      else{
        var table = '<h2>Search Results</h2>'+
                '<h3>'+term+'</h3>'+
                '<h5>Search returned no results. Try again!</h5>';

        $('#results').html(table)
        showSection('#results');
      }
    }
  });
}


// -----Attach event listeners on DOM ready-----
$(function(){
  $('#navSearch').click(function(){
    if (searching)
      $('#searchForm').submit();
    else{
      searching = true;
      $('#navExit').fadeIn();
      $('#title').fadeOut().promise().done(function(){
        $('#searchForm').fadeIn();
        $('#query').focus();
      });
      $('#navSearch').addClass('searching');
    }
  });
  $('#navExit').click(function(){
    searching = false;
    showSection('#home');
    $('#searchForm, #navExit').fadeOut().promise().done(function(){
      $('#title').fadeIn();
    })
    $('#navSearch').removeClass('searching');
  });
  $('#navHistory').click(function(){showSection('#history');});
  $('#navQuote').click(function(){showSection('#quote');});
  $('#navButton').mouseover(expandTray);
  $('#navMenu').mouseleave(hideTray);
  $('#searchForm').submit(function(e){
    query($('#query').val());
    return false;
  });
});
