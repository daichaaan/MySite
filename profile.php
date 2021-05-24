<?php
/*
Template Name: PROFILE
*/
get_header(); ?>
<?php get_template_part('nav'); ?>

<!-- main -->
<main>
    <div class="profile_box">
        <div class="profile_title">
            <h2>PROFILE</h2>
            <p>クラブ紹介</p>
        </div>
        <div class="profile_wrap">
            <div class="summary">
                <h2>クラブ概要</h2>
                <table class="summary_box">
                    <tr>
                        <th>クラブ名</th>
                        <td>潮崎会</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>××××年 △△月 □□日</td>
                    </tr>
                    <tr>
                        <th>代表者名</th>
                        <td>XXX YYYY</td>
                    </tr>
                    <tr>
                        <th>所属人数</th>
                        <td>●人(男性 ○人・女性 ●人)</td>
                    </tr>
                    <tr>
                        <th>活動内容</th>
                        <td>神奈川県社会人バドミントンリーグ</td>
                    </tr>
                    <tr>
                        <th>活動理念</th>
                        <td>チームの団結力、個々の技術・能力を向上させ、社会人リーグで上位を目指します。</td>
                    </tr>
                </table>
            </div>
            <div class="history">
                <h2>クラブ年表</h2>
                <table class="history_box">
                    <tr class="history1">
                        <th><a>2021年<br>(令和3年)</a></th>
                        <td><a>令和3年度 大会成績一覧を見る<span>PDF</span></a></td>
                    </tr>
                    <tr class="history2">
                        <th><a>2015年<br>(平成27年)</a></th>
                        <td><a>平成27年度 大会成績一覧を見る<span>PDF</span></a></td>
                    </tr>
                    <tr class="history1">
                        <th><a>xxxx年<br>(平成yy年)</a></th>
                        <td><a>社会人リーグ□□部昇格<span>PDF</span></a></td>
                    </tr>
                    <tr class="history2">
                        <th><a>xxxx年<br>(平成yy年)</a></th>
                        <td><a>神奈川県社会人バドミントンリーグ発足　参加チーム数●●<span>PDF</span></a></td>
                    </tr>
                    <tr class="history1">
                        <th><a>xxxx年<br>(平成yy年)</a></th>
                        <td><a>●月　潮崎会設立<span>PDF</span></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>