<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head><title>uHost</title></head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport"';
echo 'content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">';
echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
echo '<link rel="stylesheet" href="main.css">';
echo '<title>Document</title>';
echo '</head>';
echo '<body>';
echo '<header class="main_header">';
echo '<div class="main_header_logo">uHost</div>';
echo '<div id="main_button">';
echo '<button type="button">Packages</button>';
echo '<button type="button">Start Hosting</button>';
echo '</div>';
echo '</header>';
echo '<main>';
echo '<div class="main_form">';
echo '<h2>Create Profile</h2>';
echo '<form action="form.php">';
echo 'Логин: <label>';
echo '<input type="text" name="login" value="">';
echo '</label><br />';
echo 'Пароль: <label>';
echo '<input type="password" name="password" value="">';
echo '</label><br />';
echo '<input type="submit" value="Sign In!">';
echo '</form>';
echo '</div>';
echo '<div class="main_table">';
echo '<h2 class="section_title">Get the freedom you deserve.</h2>';
echo '<p class="plan_list">Choose Your Plan</p>';
echo '';
echo '<table style="width:100%">';
echo '<tr>';
echo '<th>FREE</th>';
echo '<th>RECOMMENDED</th>';
echo '<th>PREMIUM</th>';
echo '</tr>';
echo '<tr>';
echo '<td>$0/month</td>';
echo '<td>$29/month</td>';
echo '<td>$99/month</td>';
echo '</tr>';
echo '<tr>';
echo '<td>For hobby projects or small teams</td>';
echo '<td>For ambitious projects.</td>';
echo '<td>Your enterprise solution.</td>';
echo '</tr>';
echo '<tr>';
echo '<td>1 Workspace</td>';
echo '<td>5 Workspaces</td>';
echo '<td>10 Workspaces</td>';
echo '</tr>';
echo '</table>';
echo '';
echo '</div>';
echo '</main>';
echo '</body>';
echo '</html>';

