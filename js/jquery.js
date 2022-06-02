$(document).ready(function () {
  // document.write("Hello there ");
  // console.log("we are ready to work!");
  //   $("h1.text-info").click(() => alert("we watch you!"));
  //   $("h1.text-info").on("mouseenter",() => alert("we test you!"));

  const title = $("h1").attr("title");
  const id = $(".test").attr("id");
  // console.log({ title, id });
  $(".concat").text(title + id);
  $("#imgid").on("mouseenter", function () {
    $(this).attr("src", "img/team-2.jpg");
  });
  $("#imgid").on("mouseleave", function () {
    $(this).attr("src", "img/brand1.png");
  });

  $("h2.test").addClass("bg-success p-2 text-white");
  //   $("h2.test"). removeAttr ("align", "center");
  $(".test").attr("id", function (curIndex, curVal) {
    // console.log({ curIndex, curVal }); //{curIndex: 0, curVal: 'programmer'}
  });
  $(function () {
    $("#datepicker").datepicker();
  });

//   get json data
$("button").click(function(){
    const serial = $("form").serializeArray()
    // console.log(serial);
    
    $.each(serial, function(val, names){
        $("#displayArea").append(`${names.name} : ${names.value} <br>` )
    })

})
// $("button").click(function(){
//     $("li").each(function(){
//       alert($(this).text())
//     });
//   });
  $("button").click(function(){
    var x = $("li").toArray()
    // console.log(x);
    // var y=[]
  var y = x.map(item => item.innerHTML)
    // console.log(y);
    
  });

  $(".test").click(function(){
    $(".concat").data("greeting", "Hello World");
  });
//   $(".test").click(function(){
//     alert($(".concat").data("greeting"));
//   });




});

function Lefttime() {
  var a = document.getElementById("content");

  setTimeout(function () {
    a.value = "0 seconds";
    // console.log(a.value);
    if (a.value == "0 seconds") {
      alert("time up");
    }
  }, 5000);
  setTimeout(function () {
    a.value = "1 seconds";
  }, 4000);
  setTimeout(function () {
    a.value = "2 seconds";
  }, 3000);
  setTimeout(function () {
    a.value = "3 seconds";
  }, 2000);
  setTimeout(function () {
    a.value = "4 seconds";
  }, 1000);
  setTimeout(function () {
    a.value = "5 seconds";
  }, 0000);
}

// array ops
var arrayElements = document.getElementsByTagName("li");
var finalArray = $.makeArray(arrayElements);
// finalArray.reverse();
// finalArray.push("ruby")
// $(finalArray).appendTo(document.body);

// console.log({ finalArray});

let arr = ["py", "js", "php"];

// kaj kore na
$.each(arr, function (i, val) {
  // console.log({ i, val });
  $("#"+i).text(val)
  $("#"+i).append(document.createTextNode("- "+val))
});

function Lang(){
    // console.log("clk");
  
    $(document).ready(function(){
        $("li").each(function(idx,val){
            // console.log(val);
            $(val).css("color","red")
            if($(this).is("#first")){
                $(val).css("fontSize","24px")
            }
        })
    })
    $("table thead th").each(function(i){
        tableSum(i)
        // console.log(i);
        
    })
}
function tableSum(i){
    let sum = 0
$("table tr").each(function(){
    let val = parseInt($("td", this).eq(i).text())
    // console.log($("td"));
    
    if(!isNaN(val)){
        sum+=val
    }
})
$("table tfoot td").eq(i).text("Sum is: " +sum)
}

// 1/6/22
$(document).ready(function(){
 
  
  $(".div").click(function(){
    console.log("ok");
    
    $(this).clone().insertAfter(this)
  })

  // $(".lists li").each((item,val)=>{
  //   console.log({item,val});
    
  //   val.textContent = "nahid"
  // })
 
    $(".lists li").click(function(){
      // $(this).slideToggle();
    });

    // $("li input").focus(function(){
    //   $(this).css("background-color","#FFFFCC");
    // });
    // $("input").blur(function(){
    //   $("input").css("background-color","#D6D6FF");
    // });

})

// document.querySelectorAll('.lists li').forEach((el, index) => {
//   console.log({el,index});
  
//   el.innerHTML = '<p>Hello World</p>';
// });