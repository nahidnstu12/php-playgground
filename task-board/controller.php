<?php



function getProjectTaskByStatus($statusId, $projectName, $pdo)
{

    $query = $pdo->prepare("select * from taskslists where status_id =:id and project_name=:projectName");
    $query->bindValue(':id', $statusId);
    $query->bindValue(':projectName', $projectName);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
    // return $result;
}
function getAllStatus($pdo)
{

    $query =  $pdo->prepare("select * from taskstatus");
   
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function editTaskStatus($statusId, $taskId,$pdo)
{
   
    $query = $pdo->prepare("update taskslists set status_id =:status_id where id=:id");
    $query->bindValue(':status_id', $statusId);
    $query->bindValue(':id', $taskId);
    
    $query->execute();
}
function addTaskItem($statusId, $title, $projectName,$pdo)
{
   
    $query = $pdo->prepare("insert into taskslists (title,project_name, status_id,created_at) values (:title,:project_name,:status_id,:date)");
    $query->bindValue(':title', $title);
    $query->bindValue(':project_name', $projectName);
    $query->bindValue(':status_id', $statusId);
    $query->bindValue(':date', date('Y-m-d H:i:s'));
    
    $query->execute();
}

// later use
class TaskManagement01
{
    function getProjectTaskByStatus($statusId, $projectName)
    {
        $db = new DB();
        $query = "select * from tasklists where status_id =? and project_name=?";
        $result = $db->runQuery($query, "is", array($statusId, $projectName));
        return $result;
    }
    function getAllStatus($projectName)
    {
        $db = new DB();
        $query = "select * from taskstatus where  project_name=?";
        $result = $db->runBaseQuery($query, "is", array($projectName));
        echo $result;
        return $result;
    }
    function editTaskStatus($statusId, $taskId)
    {
        $db = new DB();
        $query = "update tasklists set status_id =? where id=?";
        $result = $db->update($query, "ii", array($statusId, $taskId));
        return $result;
    }
    function addTaskItem($statusId, $title, $projectName)
    {
        $db = new DB();
        $query = "insert into tasklists (title,project_name, status_id,created_at) values ($title, $projectName, $statusId," . date("ymd") . ") ";
        return $db->runBaseQuery($query);
    }
}
