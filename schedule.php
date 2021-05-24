<?php
/*
Template Name: SCHEDULE
*/
get_header(); ?>
<?php get_template_part('nav'); ?>

<!-- main -->
<main>
    <div class="schedule_wrap">
        <div class="flexbox">
            <div class="schedule_title">
                <h2>SCHEDULE</h2>
                <p>スケジュール</p>
            </div>
            <div class="years_list">
                <p>年度を選ぶ：<span>年度を選んで下さい</span><button type="menu">▼</button></p>
            </div>
        </div>
        <div class="schedule_head">
            <a class="head_scroll left" href="#"><span></span></a>
            <h3>2021.05</h3>
            <a class="head_scroll right" href="#"><span></span></a>
        </div>
        <div class="schedule">
            <table>
                <tr style="background-color: #fb6700;color: white;">
                    <th>日付</th>
                    <td>スケジュール</td>
                </tr>
                <tr class="schedule_1">
                    <th>5.1(土)</th>
                    <td>基礎練習</td>
                </tr>
                <tr class="schedule_2">
                    <th>5.2(日)</th>
                    <td>応用練習</td>
                </tr>
                <tr class="schedule_1">
                    <th>5.3(月)</th>
                    <td>基礎練習</td>
                </tr>
                <tr class="schedule_2">
                    <th>5.4(火)</th>
                    <td>応用練習</td>
                </tr>
                <tr class="schedule_1">
                    <th>5.5(水)</th>
                    <td>基礎練習</td>
                </tr>
                <tr class="schedule_2">
                    <th>5.6(木)</th>
                    <td>応用練習</td>
                </tr>
                <tr class="schedule_1">
                    <th>5.7(金)</th>
                    <td>基礎練習</td>
                </tr>
                <tr class="schedule_2">
                    <th>5.8(土)</th>
                    <td>応用練習</td>
                </tr>
                <tr class="schedule_1">
                    <th>5.9(日)</th>
                    <td>基礎練習</td>
                </tr>
                <tr class="schedule_2">
                    <th>5.10(月)</th>
                    <td>応用練習</td>
                </tr>
                <tr class="schedule_1">
                    <th>5.11(火)</th>
                    <td>基礎練習</td>
                </tr>
                <tr class="schedule_2">
                    <th>5.12(水)</th>
                    <td>応用練習</td>
                </tr>
                <tr class="schedule_1">
                    <th>5.13(木)</th>
                    <td>基礎練習</td>
                </tr>
                <tr class="schedule_2">
                    <th>5.14(金)</th>
                    <td>応用練習</td>
                </tr>
            </table>
        </div>
    </div>
</main>

<?php get_footer(); ?>