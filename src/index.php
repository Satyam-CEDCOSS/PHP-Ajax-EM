<?php
include_once "config.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./CSS/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense Manager</title>
</head>

<body>
    <div class="container">
        <h1>Expense Manager</h1>

        <!-- Navigation Pannel  -->
        <nav>
            <h5>Navigation Pannel</h5>
            <div class="nav__box">
                <div class="nav__menu">
                    <button id="nav_salary">Salary</button>
                    <button id="nav_expenses">Expenses</button>
                </div>
            </div>
        </nav>

        <!-- Header Salary Pannel  -->
        <header>
            <h5>Salary Insertion</h5>
            <div class="header__box">
                <div class="header__menu">
                    <label for="">Enter Salary :
                        <input type="number" name="salary" id="salary_amount">
                    </label>
                    <button id="enter_salary">Add</button>
                    <button id="reset_salary">Reset</button>

                </div>
            </div>
        </header>

        <!-- Section Expenses Pannel  -->
        <section>
            <h5>Expense Insertion</h5>
            <div class="section__box">
                <div class="section__menu">
                    <select name="expence_list" id="dropdown">
                        <option value="">-Select-</option>
                        <option value="Grocery">Grocery</option>
                        <option value="Veggies">Veggies</option>
                        <option value="Travelling">Travelling</option>
                        <option value="Miscellaneous">Miscellaneous</option>
                    </select>
                    <input type="number" name="expense" id="expense_amount">
                    <button id="enter_expense">Add</button>
                    <button id="reset_expense">Reset</button>
                    <button id="enter_update">Update</button>
                </div>
            </div>
        </section>

        <!-- Footer Savings Pannel  -->
        <footer>
            <h5>Savings Data</h5>
            <div class="footer__box">
                <div class="footer__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Salary</th>
                                <th>Expenses</th>
                                <th>Savings</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div class="footer__menu">
                    <input type="text" name="final_salary" id="salaries" disabled><span>-</span>
                    <input type="text" name="final_expense" id="expenses" disabled><span>=</span>
                    <input type="text" name="savings" id="savings" disabled>
                </div>
            </div>
        </footer>

        <!-- Main Table Pannel  -->
        <main>
            <h5>Expense Table</h5>
            <div class="main__box">
                <table>
                    <thead>
                        <tr>
                            <th>Expense Type</th>
                            <th>Amount</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="table_body"></tbody>
                    <tfoot id="table_foot"></tfoot>
                </table>
            </div>
        </main>
    </div>
</body>
<script src="./JS/script.js"></script>

</html>