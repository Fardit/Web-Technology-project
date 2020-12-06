<?php
                    session_start();
                   require('../Model/connection.php');
                    $userName = $balance = $amount =  '';
                    $uid=  $_SESSION['id'];
                    $balance=balanceRetrive($uid);
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $amount=$_POST['amount'];
                        if (isset($_POST['add'])) {
                            $amount=$amount+$balance;
                            updateBalance($amount,$uid);
                            $balance=balanceRetrive($uid);
                        }
                        else if(isset($_POST['withdraw'])){
                            if($balance<$amount+500){
                                echo "you can not withdaw all of your money (minimum balance 500)";
                            }
                            else{
                                $amount=$balance-$amount;
                                updateBalance($amount,$uid);
                                $balance=balanceRetrive($uid);
                            }
                            
                        }
                    }
                    
            
?>