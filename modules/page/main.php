<?php
get_header()
?>
<?php
$sql = "SELECT * FROM `page` where status = 1";
$result = mysqli_query($conn, $sql);
$row = array();
$num_rows = mysqli_num_rows($result);
if ($num_rows > 0) {
    $row = $result->fetch_assoc();
}
//show_array($list_page);
?>
<div id="main-content-wp" class="clearfix detail-blog-page">
    <div class="wp-inner">
        <div class="secion" id="breadcrumb-wp">
            <div class="secion-detail">
                <ul class="list-item clearfix">
                    <li>
                        <a href="?" title="">Trang chủ</a>
                    </li>
                    <li>
                        <a href="?" title=""><?php echo $row['page_title']?></a>
                    </li>
                </ul>
            </div>
        </div>
       
        <div class="main-content fl-right">
            <?php
            if (!empty($row)) {
                ?>
                <div class="section" id="detail-blog-wp">
                    <div class="section-head clearfix">
                        <h3 class="section-title"><?php echo $row['page_title']; ?></h3>
                    </div>
                    <div class="section-detail">
                        <span class="create-date"><?php echo $row['created_at']; ?></span>
                        <div class="detail">
                            <p><?php echo $row['page_content']; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <p>Không có dữ liệu trang</p>
                <?php
            }
            ?>
            <div class="section" id="social-wp">
                <div class="section-detail">
                    <div class="fb-like" data-href="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    <div class="g-plusone-wp">
                        <div class="g-plusone" data-size="medium"></div>
                    </div>
                    <div class="fb-comments" id="fb-comment" data-href="" data-numposts="5"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
