<?
$sql_c = "select * from bank where account_group_id='2'";							
$result_c=mysql_query($sql_c);												
				$total_cash=0;
				while($fetch_c=mysql_fetch_array($result_c))
				{
$bank_id = $fetch_c['bank_id'];
$sqlb=mysql_query("SELECT * 
FROM sys_transactions WHERE bank_id=$bank_id
ORDER BY id DESC
LIMIT 1");
$fetchb=mysql_fetch_array($sqlb);
$bal = $fetchb['bal'];
$total_cash = $total_cash + $bal;
				}			
				?>

<?
$sql_t = "select * from bank where account_group_id='1'";							
$result_t=mysql_query($sql_t);												
				$total_balance=0;
				while($fetch_t=mysql_fetch_array($result_t))
				{
$bank_id = $fetch_t['bank_id'];
$sqlb=mysql_query("SELECT * 
FROM sys_transactions WHERE bank_id=$bank_id
ORDER BY id DESC
LIMIT 1");
$fetchb=mysql_fetch_array($sqlb);
$bal = $fetchb['bal'];
$total_balance = $total_balance + $bal;
				}			
				?>
				
				
			
<?php
if($role=="Administrator")
{
?>

<div class="page-header">
					<div class="page-title">
						<h3>Dashboard</h3>
						<span>Good morning, Admin!</span>
					</div>

					<!-- Page Stats -->
					<ul class="page-stats">
					
						<li>
							<div class="summary">
								<span>Total Cash</span>
<h3>
&#8377; <?php echo number_format((float)$total_cash, 2, '.', ''); ?></h3>
							</div>
							<div id="sparkline-bar" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
							<!-- Use instead of sparkline e.g. this:
							<div class="graph circular-chart" data-percent="73">73%</div>
							-->
						</li>
						<li>
							<div class="summary">
								<span>Total Balance</span>
<h3>&#8377; <?php echo number_format((float)$total_balance, 2, '.', ''); ?> </h3>
							</div>
							<div id="sparkline-bar2" class="graph sparkline hidden-xs">20,15,8,50,20,40,20,30,20,15,30,20,25,20</div>
						</li>
						
						
					</ul>
					<!-- /Page Stats -->
				</div>
				
<?
}
?>