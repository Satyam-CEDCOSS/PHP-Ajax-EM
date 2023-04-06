// Display function 
function display(){
    $.ajax({
        type: "POST",
        url: "/display.php",
        dataType: "text",
    }).done(function (result){
        $("#table_body").html(result)
        color()
      });
    $.ajax({
        type: "POST",
        url: "/add_expenses.php",
        dataType: "text",
      }).done(function (result){
        $("#expenses").val(result)
        color()
      });
    $.ajax({
        type: "POST",
        url: "/savings.php",
        dataType: "text",
      }).done(function (result){
        $("#savings").val(result)
        color()
      });
}
display()
$("section").hide() 
$("#enter_update").hide() 

// Navigation Button Function 
$(document).ready(function(){
    $(document).on("click","#nav_salary",function(){
        $("section").hide()
        $("header").show()
    })
    $(document).on("click","#nav_expenses",function(){
        $("section").show()
        $("header").hide()
    })
})

// Enter Expense function 
$(document).ready(function(){
    $("#enter_expense").click(function () {
        let type = $("#dropdown").val();
        let amount = $("#expense_amount").val();
        $.ajax({
          type: "POST",
          url: "/add_product.php",
          data: {"item":type,"amount":amount},
          dataType: "text",
        }).done(function (result){
            display();
        });
    });
})

// Enter Salary Function 
$(document).ready(function(){
    $("#enter_salary").click(function () {
        let money = $("#salary_amount").val();
        $.ajax({
          type: "POST",
          url: "/add_salary.php",
          data: {"amount":money},
          dataType: "text",
        }).done(function (result){
            display()
            $("#salaries").val(result)
        });

    });
})

// Delete Function 
function deletes(val){
    $.ajax({
        type: "POST",
        url: "/delete.php",
        data: {"id":val},
        dataType: "text",
      }).done(function (result){
        display()
      });
}

// Edit Function 
let global_var = 0;
function edit(val){
    $("#enter_update").show()
    $("#enter_expense").hide()
    global_var = val;
    $.ajax({
        type: "POST",
        url: "/edit.php",
        data: {"id":val},
        dataType: "text",
      }).done(function (result){
        let res = JSON.parse(result)
        $("#dropdown").val(res.item);
        $("#expense_amount").val(res.amount);
      });
}

// Update Function 
$(document).ready(function(){
    $("#enter_update").click(function () {
        let type = $("#dropdown").val();
        let amount = $("#expense_amount").val();
        let index = global_var
        $.ajax({
          type: "POST",
          url: "/update_product.php",
          data: {"id":index,"item":type,"amount":amount},
          dataType: "text",
        }).done(function (result){
            display()
            $("#enter_update").hide()
            $("#enter_expense").show()
        });

    });
})

// Reset Salary Function 
$(document).ready(function(){
    $("#reset_salary").click(function(){
        $.ajax({
            type: "POST",
            url: "/reset_salary.php",
            dataType: "text",
          }).done(function (result){
              $("#salaries").val(result)
              display()
          });
    })
})

// Reset Expense Function 
$(document).ready(function(){
    $("#reset_expense").click(function(){
        $.ajax({
            type: "POST",
            url: "/reset_expenses.php",
            dataType: "text",
          }).done(function (result){
                console.log(result);
                display()
          });
    })
})

// Color Text Function 
function color(){
    $("#salaries").css("color", "green");
    $("#expenses").css("color", "red");
    if ($("#savings").val()>=0){
        $("#savings").css("color", "green")
    }
    else{
        $("#savings").css("color", "red")
    }
    
}
