const statusItem = [
  { id: 1, status_name: "New Feature" },
  { id: 2, status_name: "In Progress" },
  { id: 3, status_name: "Pending" },
  { id: 4, status_name: "Successfully Complete" },
];

const tasks = [
  {
    id: 1,
    title: "Learn Bootstrap",
    description: "learn quickly",
    project_name: "initial",
    status_id: 1,
    created_at: new Date(),
  },
  {
    id: 2,
    title: "Learn Jquery",
    description: "learn quickly",
    project_name: "initial",
    status_id: 1,
    created_at: new Date(),
  },
  {
    id: 3,
    title: "Learn Php",
    description: "learn quickly",
    project_name: "initial",
    status_id: 1,
    created_at: new Date(),
  },
];

const fetchStatusData = (id, status_id) => {
  const currStatus = statusItem.find((item) => item.id === status_id);
  const currStatusData = tasks.filter((item) => item.status_id === status_id);
//   console.log({ currStatus, currStatusData });

  const html = `
    <div class="card-header">
                    ${currStatus.status_name}
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush sortable ui-sortable" data-status-id="${currStatus.id}" id="sort${currStatus.id}">
                    ${currStatusData.map(item => 
                        (`<li class="list-group-item ui-sortable-handle" data-task-id="${item.id}" style="z-index:99; display:block;">${item.title}</li>`)
                        )}
                    </ul>
                </div>`;
  $(id).append(html);
//   console.log(html);
  
};
{/* <li class="list-group-item" data-status-id="${item.id}">${item.title}</li> */}
fetchStatusData("#newFeature", 1);
fetchStatusData("#inProgress", 2);
fetchStatusData("#pending", 3);
fetchStatusData("#complete", 4);

// 2nd segment
function getData(){
    // console.log("containment");
    
fetchStatusData("#newFeature1", 1);
fetchStatusData("#inProgress1", 2);
fetchStatusData("#pending1", 3);
fetchStatusData("#complete1", 4);
}
getData()
const insertTaskList = () => {};
const updateTaskList = () => {};

//  module.exports = {
//      status,
//      tasks,
//      fetchStatusData,
//  }
