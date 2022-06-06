// let options = {
//     group: "shared",
//     animation: 150,
//     onEnd: evt => {
//         const url = "edit-status.php";
//         const status_id = evt.to.getAttribute("data-status-id")
//         const task_id = evt.to.getAttribute("data-task-id")

//         console.log({status_id, task_id});

//         $.ajax({
//             url: `${url}?status_id=${status_id}&task_id=${task_id}`,
//             success: res => console.log(res)

//         })

//     }
// }

$(function () {
  var url = "edit-status.php";
  $('ul[id^="sort"]')
    .sortable({
      connectWith: ".sortable",
      receive: function (e, ui) {
        var status_id = $(ui.item).parent(".sortable").data("status-id");
        var task_id = $(ui.item).data("task-id");
        console.log({status_id, task_id});
        
        $.ajax({
          url: url + "?status_id=" + status_id + "&task_id=" + task_id,
          success: function (response) {
              console.log(response);
              
          },
        });
      },
    })
    .disableSelection();
});
