<section id="section-table-recruit" class="section-table-recruit">
    <div class="container">
        <div class="wrapper-title mw-100">
            <div class="section-title fade-right">
                <div class="title">
                    <h1 class="font-boild h2">Cơ Hội</h1>
                    <div class="divider "></div>
                </div>
                <span class="h2 font-boild ">Việc Làm</span>
            </div>
        </div>
        <div class="wrapper-table">
            <table class="table">
                <thead>
                    <tr>
                        <th>Stt</th>
                        <th class="title-job">Vị trí ứng tuyển</th>
                        <th>Đăng tuyển</th>
                        <th>Số lượng</th>
                        <th>Ngày hết hạn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ( have_rows('recruit_table_repeater') ) : ?>
                    <?php $i = 0 ?>
                    <?php while( have_rows('recruit_table_repeater') ) : the_row(); ?>
                    <?php $i++;?>

                    <tr class="table-row">
                        <td class="stt h3"><?php echo $i ;?></td>
                        <td class="name-job"> <?php the_sub_field('name_job'); ?></td>
                        <td>
                            <?php if ( get_sub_field('link_job') ) : ?>
                            <div class="btn btn-outline-red">
                                <div class="btn-click magnetic" data-strength="25" data-strength-text="15">
                                    <div class="btn-fill"></div>
                                    <span class="btn-text">
                                        <a class="btn-text-inner change"
                                            href="<?php echo get_sub_field('link_job')?>">Ứng tuyển</a>
                                    </span>
                                </div>
                            </div>
                            <?php endif; ?>
                        </td>
                        <td><?php the_sub_field('quantity'); ?></td>
                        <td><?php the_sub_field('expiration_date'); ?></td>
                    </tr>
                    <?php endwhile; ?>

                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</section>