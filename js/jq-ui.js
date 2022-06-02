// $(function() {
//     $( "#draggable" ).draggable();
//  });

$(document).ready(function () {
  $(".card-drag ul li").draggable({
    containment: ".sortbale",
  });
  $(".card-drop").droppable({
    drop: function (event, ui) {
    //   console.log({ event, ui });
    console.log($(ui));
    
    },
  });

//   $( "ul" ).sortable({
//     connectWith: ".sortable"
//   });
// console.log($('ul[id^="sort"]')[0]);

  $('ul[id^="sort"]').sortable(
    {
        connectWith : ".sortable",
        receive : function(e, ui) {
            console.log({ui});
            
            var status_id = $(ui.item).parent(".sortable").data(
                    "status-id");
            var task_id = $(ui.item).data("task-id");
            console.log({status_id, task_id});
            console.log("ok");
            
            
            // $.ajax({
            //     url : url + '?status_id=' + status_id + '&task_id='
            //             + task_id,
            //     success : function(response) {
            //     }
            // });
        }

    })
    .disableSelection();
});
