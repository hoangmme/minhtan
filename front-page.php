<?php
/**
 * Template Name: Trang chủ IHC
 */
get_header(); ?>


    <!-- 2. HERO SECTION -->
    <section class="pt-sectionMobile pb-[80px] md:pt-sectionDesktop md:pb-[120px]">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="max-w-4xl mb-16 md:mb-24">
                <h1 class="text-5xl md:text-7xl font-normal leading-tight tracking-tight text-dark mb-8">
                    Tăng trưởng doanh nghiệp.<br> Định hình tương lai.
                </h1>
                <p class="text-2xl md:text-3xl font-normal text-mediumGray leading-relaxed mb-10 max-w-3xl">
                    Một tập đoàn đầu tư toàn cầu hàng đầu, thúc đẩy tăng trưởng bền vững và giá trị dài hạn trên nhiều lĩnh vực.
                </p>
                <a href="#about"
                    class="inline-flex items-center gap-3 px-6 py-3 border border-black/10 rounded-[100vw] text-dark bg-transparent hover:bg-black hover:text-white transition-all duration-300 text-lg">
                    Khám Phá Các Khoản Đầu Tư
                    <span class="css-arrow down"></span>
                </a>
            </div>
            <div class="w-full h-[50vh] md:h-[75vh] overflow-hidden">
                <video autoplay loop muted playsinline class="w-full h-full object-cover">
                    <source src="https://assets.mixkit.co/videos/preview/mixkit-skyscrapers-of-a-city-business-district-41123-large.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
        <hr class="border-borderColor">
    </div>

    <!-- 3. COMPANY OVERVIEW -->
    <section id="about" class="py-sectionMobile md:py-sectionDesktop">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10">
                <div class="md:col-span-4">
                    <h4 class="text-[14px] md:text-[16px] font-bold text-labelGray uppercase tracking-wider">
                        Tổng Quan Công Ty
                    </h4>
                </div>
                <div class="md:col-span-8">
                    <h2 class="text-[36px] md:text-[56px] font-normal leading-tight tracking-tight text-dark mb-8">
                        Chúng tôi triển khai vốn có chiến lược để xây dựng các doanh nghiệp dẫn đầu thị trường và kiên cường.
                    </h2>
                    <p class="text-[20px] md:text-[24px] font-normal text-mediumGray leading-relaxed mb-10">
                        Được thành lập với tầm nhìn đa dạng hóa và phát triển bối cảnh kinh tế, cấu trúc tập đoàn cho phép chúng tôi trở thành những nhà điều hành linh hoạt và nhà đầu tư kiên nhẫn. Chúng tôi hợp tác với các đội ngũ quản lý xuất sắc để tối ưu hiệu quả hoạt động và mở rộng quy mô doanh nghiệp trên toàn cầu.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 pt-8 border-t border-borderColor">
                        <div>
                            <h5 class="text-[14px] font-bold text-dark uppercase tracking-wider mb-2">Tầm Nhìn
                            </h5>
                            <p class="text-mediumGray font-normal text-lg">Trở thành tập đoàn đầu tư uy tín và có tầm ảnh hưởng lớn nhất toàn cầu.</p>
                        </div>
                        <div>
                            <h5 class="text-[14px] font-bold text-dark uppercase tracking-wider mb-2">Sứ Mệnh
                            </h5>
                            <p class="text-mediumGray font-normal text-lg">Mang lại lợi nhuận bền vững bằng cách đầu tư vào các ngành công nghiệp chuyển đổi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
        <hr class="border-borderColor">
    </div>

    <!-- 4. KEY METRICS -->
    <section class="py-sectionMobile md:py-sectionDesktop bg-lightGray">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 md:gap-8">
                <div>
                    <h4 class="text-[14px] md:text-[16px] font-bold text-labelGray uppercase tracking-wider mb-2">
                        Vốn hóa Thị trường</h4>
                    <div class="text-[48px] md:text-[60px] font-normal text-dark leading-none tracking-tight">AED 876 bn
                    </div>
                </div>
                <div>
                    <h4 class="text-[14px] md:text-[16px] font-bold text-labelGray uppercase tracking-wider mb-2">
                        Tổng Tài Sản</h4>
                    <div class="text-[48px] md:text-[60px] font-normal text-dark leading-none tracking-tight">AED 228 bn
                    </div>
                </div>
                <div>
                    <h4 class="text-[14px] md:text-[16px] font-bold text-labelGray uppercase tracking-wider mb-2">
                        Doanh Thu (Năm 2023)</h4>
                    <div class="text-[48px] md:text-[60px] font-normal text-dark leading-none tracking-tight">AED 60.1 bn
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. INVESTMENT SECTORS -->
    <section class="py-sectionMobile md:py-sectionDesktop">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <h2 class="text-[48px] md:text-[72px] font-normal leading-tight tracking-tight text-dark mb-16">
                Lĩnh Vực Chiến Lược
            </h2>
            <div class="flex flex-col border-t border-black">
                <!-- Sector Item -->
                <a href="#"
                    class="group flex flex-col md:flex-row justify-between md:items-center py-8 border-b border-borderColor hover-row transition-colors px-4">
                    <div class="flex items-center gap-8 mb-4 md:mb-0">
                        <span class="text-[16px] font-bold text-labelGray">01</span>
                        <h3 class="text-[32px] md:text-[40px] font-normal tracking-tight text-dark">Bất Động Sản &
                            Xây Dựng</h3>
                    </div>
                    <div class="flex items-center gap-6">
                        <p class="text-lg font-normal text-mediumGray hidden md:block max-w-md">Phát triển các siêu dự án
                            và hạ tầng đô thị bền vững.</p>
                        <div
                            class="w-10 h-10 rounded-full border border-borderColor flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">
                            <span class="css-arrow"></span></div>
                    </div>
                </a>
                <!-- Sector Item -->
                <a href="#"
                    class="group flex flex-col md:flex-row justify-between md:items-center py-8 border-b border-borderColor hover-row transition-colors px-4">
                    <div class="flex items-center gap-8 mb-4 md:mb-0">
                        <span class="text-[16px] font-bold text-labelGray">02</span>
                        <h3 class="text-[32px] md:text-[40px] font-normal tracking-tight text-dark">Chăm Sóc Sức Khỏe</h3>
                    </div>
                    <div class="flex items-center gap-6">
                        <p class="text-lg font-normal text-mediumGray hidden md:block max-w-md">Thúc đẩy công nghệ y tế
                            và các cơ sở chăm sóc tiêu chuẩn quốc tế.</p>
                        <div
                            class="w-10 h-10 rounded-full border border-borderColor flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">
                            <span class="css-arrow"></span></div>
                    </div>
                </a>
                <!-- Sector Item -->
                <a href="#"
                    class="group flex flex-col md:flex-row justify-between md:items-center py-8 border-b border-borderColor hover-row transition-colors px-4">
                    <div class="flex items-center gap-8 mb-4 md:mb-0">
                        <span class="text-[16px] font-bold text-labelGray">03</span>
                        <h3 class="text-[32px] md:text-[40px] font-normal tracking-tight text-dark">Công Nghệ & AI</h3>
                    </div>
                    <div class="flex items-center gap-6">
                        <p class="text-lg font-normal text-mediumGray hidden md:block max-w-md">Đầu tư vào công nghệ chuyên sâu,
                            an ninh mạng và chuyển đổi dữ liệu.</p>
                        <div
                            class="w-10 h-10 rounded-full border border-borderColor flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">
                            <span class="css-arrow"></span></div>
                    </div>
                </a>
                <!-- Sector Item -->
                <a href="#"
                    class="group flex flex-col md:flex-row justify-between md:items-center py-8 border-b border-borderColor hover-row transition-colors px-4">
                    <div class="flex items-center gap-8 mb-4 md:mb-0">
                        <span class="text-[16px] font-bold text-labelGray">04</span>
                        <h3 class="text-[32px] md:text-[40px] font-normal tracking-tight text-dark">Nông Nghiệp & Thực Phẩm</h3>
                    </div>
                    <div class="flex items-center gap-6">
                        <p class="text-lg font-normal text-mediumGray hidden md:block max-w-md">Đảm bảo chuỗi cung ứng
                            và những đổi mới công nghệ nông nghiệp bền vững.</p>
                        <div
                            class="w-10 h-10 rounded-full border border-borderColor flex items-center justify-center group-hover:bg-black group-hover:text-white transition-all">
                            <span class="css-arrow"></span></div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 6. PORTFOLIO -->
    <section id="portfolio" class="py-sectionMobile md:py-sectionDesktop bg-lightGray">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="flex justify-between items-end mb-16">
                <h2 class="text-[48px] md:text-[72px] font-normal leading-tight tracking-tight text-dark">Danh Mục
                    Nổi Bật</h2>
                <a href="#"
                    class="hidden md:inline-flex items-center gap-3 px-6 py-3 border border-black/10 rounded-[100vw] text-dark bg-transparent hover:bg-black hover:text-white transition-all duration-300 text-lg">
                    Xem Tất Cả Tài Sản <span class="css-arrow"></span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Portfolio Item -->
                <div class="group cursor-pointer">
                    <div class="w-full aspect-square overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1574362848149-11496d93a7c7?q=80&w=2084&auto=format&fit=crop"
                            class="w-full h-full object-cover sharp-img group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-[28px] font-normal text-dark tracking-tight">Alpha Real Estate</h3>
                            <p class="text-[16px] text-labelGray font-bold uppercase tracking-wider mt-1">Bất Động Sản
                            </p>
                        </div>
                        <span class="css-arrow mt-3"></span>
                    </div>
                </div>
                <!-- Portfolio Item -->
                <div class="group cursor-pointer">
                    <div class="w-full aspect-square overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop"
                            class="w-full h-full object-cover sharp-img group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-[28px] font-normal text-dark tracking-tight">CyberX AI Group</h3>
                            <p class="text-[16px] text-labelGray font-bold uppercase tracking-wider mt-1">Công Nghệ
                            </p>
                        </div>
                        <span class="css-arrow mt-3"></span>
                    </div>
                </div>
                <!-- Portfolio Item -->
                <div class="group cursor-pointer">
                    <div class="w-full aspect-square overflow-hidden mb-6">
                        <img src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?q=80&w=2089&auto=format&fit=crop"
                            class="w-full h-full object-cover sharp-img group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-[28px] font-normal text-dark tracking-tight">MediCare Global</h3>
                            <p class="text-[16px] text-labelGray font-bold uppercase tracking-wider mt-1">Chăm Sóc Sức Khỏe
                            </p>
                        </div>
                        <span class="css-arrow mt-3"></span>
                    </div>
                </div>
            </div>

            <div class="mt-10 md:hidden">
                <a href="#"
                    class="inline-flex items-center gap-3 px-6 py-3 border border-black/10 rounded-[100vw] text-dark bg-transparent hover:bg-black hover:text-white transition-all duration-300 text-lg w-full justify-center">
                    Xem Tất Cả Tài Sản <span class="css-arrow"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- 7. LEADERSHIP -->
    <section class="py-sectionMobile md:py-sectionDesktop">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <h2
                class="text-[48px] md:text-[72px] font-normal leading-tight tracking-tight text-dark mb-16 text-center md:text-left">
                Hội Đồng Quản Trị
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12">
                <!-- Leader 1 -->
                <div>
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1974&auto=format&fit=crop"
                        class="w-full aspect-[3/4] object-cover sharp-img grayscale hover:grayscale-0 transition-all duration-500 mb-6">
                    <h3 class="text-[24px] font-normal text-dark tracking-tight">H.E. Syed Basar</h3>
                    <p class="text-[14px] text-labelGray font-bold uppercase tracking-wider mt-1">Chủ Tịch</p>
                </div>
                <!-- Leader 2 -->
                <div>
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=1976&auto=format&fit=crop"
                        class="w-full aspect-[3/4] object-cover sharp-img grayscale hover:grayscale-0 transition-all duration-500 mb-6">
                    <h3 class="text-[24px] font-normal text-dark tracking-tight">Sofia Al-Fayed</h3>
                    <p class="text-[14px] text-labelGray font-bold uppercase tracking-wider mt-1">Giám Đốc
                        Điều Hành</p>
                </div>
                <!-- Leader 3 -->
                <div>
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=1974&auto=format&fit=crop"
                        class="w-full aspect-[3/4] object-cover sharp-img grayscale hover:grayscale-0 transition-all duration-500 mb-6">
                    <h3 class="text-[24px] font-normal text-dark tracking-tight">Omar Tariq</h3>
                    <p class="text-[14px] text-labelGray font-bold uppercase tracking-wider mt-1">Giám Đốc
                        Tài Chính</p>
                </div>
                <!-- Leader 4 -->
                <div>
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1974&auto=format&fit=crop"
                        class="w-full aspect-[3/4] object-cover sharp-img grayscale hover:grayscale-0 transition-all duration-500 mb-6">
                    <h3 class="text-[24px] font-normal text-dark tracking-tight">David Chen</h3>
                    <p class="text-[14px] text-labelGray font-bold uppercase tracking-wider mt-1">Trưởng Bộ Phận
                        Đầu Tư</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. ESG & SUSTAINABILITY -->
    <section class="py-sectionMobile md:py-sectionDesktop bg-dark text-white">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-[40px] items-center">
                <div class="w-full aspect-[4/5] md:aspect-square order-2 md:order-1">
                    <img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?q=80&w=2070&auto=format&fit=crop"
                        class="w-full h-full object-cover sharp-img opacity-90">
                </div>
                <div class="md:pl-10 order-1 md:order-2">
                    <h4 class="text-[14px] md:text-[16px] font-bold text-white/50 uppercase tracking-wider mb-6">Cam Kết
                        ESG</h4>
                    <h2 class="text-[48px] md:text-[72px] font-normal leading-tight tracking-tight mb-8 text-white">
                        Đầu tư vào một tương lai bền vững.
                    </h2>
                    <p class="text-[24px] md:text-[28px] font-normal text-white/80 leading-relaxed mb-10">
                        Chúng tôi tích hợp các khuôn khổ môi trường, xã hội và quản trị (ESG) vào vòng đời đầu tư, đảm bảo các công ty trong danh mục không chỉ mang lại lợi nhuận tài chính mà còn tạo ra tác động tích cực toàn cầu.
                    </p>
                    <a href="#"
                        class="inline-flex items-center gap-3 px-6 py-3 border border-white/30 rounded-[100vw] text-white bg-transparent hover:bg-white hover:text-dark transition-all duration-300 text-lg">
                        Đọc Báo Cáo ESG
                        <span class="css-arrow"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. INVESTOR RELATIONS -->
    <section id="ir" class="py-sectionMobile md:py-sectionDesktop">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-10">
                <div class="md:col-span-5">
                    <h4 class="text-[14px] md:text-[16px] font-bold text-labelGray uppercase tracking-wider mb-6">
                        Quan Hệ Nhà Đầu Tư
                    </h4>
                    <h2 class="text-[48px] md:text-[72px] font-normal leading-tight tracking-tight text-dark mb-8">
                        Minh Bạch <br> Tài Chính.
                    </h2>

                    <!-- Fake Stock Ticker -->
                    <div class="border border-borderColor p-6 mb-8 max-w-sm">
                        <div class="text-[14px] font-bold text-labelGray uppercase tracking-wider mb-2">ADX: IHC
                        </div>
                        <div class="text-[40px] font-normal text-dark leading-none tracking-tight mb-2">AED 399.50</div>
                        <div class="text-green-600 font-bold flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                            </svg>
                            +1.2% (Today)
                        </div>
                    </div>
                </div>

                <div class="md:col-span-7 md:pt-16">
                    <div class="flex flex-col border-t border-black">
                        <a href="#"
                            class="group flex justify-between items-center py-6 border-b border-borderColor hover-row px-4">
                            <span class="text-[20px] md:text-[24px] font-normal text-dark">Báo Cáo Thường Niên 2023</span>
                            <span
                                class="text-[14px] font-bold text-labelGray group-hover:text-dark transition-colors uppercase tracking-wider flex items-center gap-2">
                                Tải Xuống PDF <span class="css-arrow down mb-0 mt-1"></span>
                            </span>
                        </a>
                        <a href="#"
                            class="group flex justify-between items-center py-6 border-b border-borderColor hover-row px-4">
                            <span class="text-[20px] md:text-[24px] font-normal text-dark">Kết Quả Tài Chính
                                Q1/2024</span>
                            <span
                                class="text-[14px] font-bold text-labelGray group-hover:text-dark transition-colors uppercase tracking-wider flex items-center gap-2">
                                Tải Xuống PDF <span class="css-arrow down mb-0 mt-1"></span>
                            </span>
                        </a>
                        <a href="#"
                            class="group flex justify-between items-center py-6 border-b border-borderColor hover-row px-4">
                            <span class="text-[20px] md:text-[24px] font-normal text-dark">Cẩm Nang Quản Trị
                                Doanh Nghiệp</span>
                            <span
                                class="text-[14px] font-bold text-labelGray group-hover:text-dark transition-colors uppercase tracking-wider flex items-center gap-2">
                                Tải Xuống PDF <span class="css-arrow down mb-0 mt-1"></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. LATEST NEWS -->
    <section id="news" class="py-sectionMobile md:py-sectionDesktop bg-lightGray">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <h2 class="text-[48px] md:text-[72px] font-normal leading-tight tracking-tight text-dark">Tin Tức</h2>
                <div class="flex items-center gap-4 mt-6 md:mt-0">
                    <div
                        class="slider-nav-btn w-[40px] h-[40px] rounded-full bg-black text-white flex items-center justify-center">
                        <span class="css-arrow prev"></span></div>
                    <div
                        class="slider-nav-btn w-[40px] h-[40px] rounded-full bg-black text-white flex items-center justify-center">
                        <span class="css-arrow next"></span></div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                <?php
                $news_args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                );
                $news_query = new WP_Query( $news_args );
                if ( $news_query->have_posts() ) :
                    while ( $news_query->have_posts() ) : $news_query->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="block">
                    <article class="group cursor-pointer">
                        <div class="w-full aspect-[4/3] overflow-hidden mb-6">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover sharp-img group-hover:scale-105 transition-transform duration-700')); ?>
                            <?php else: ?>
                                <img src="https://via.placeholder.com/600x400" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover sharp-img group-hover:scale-105 transition-transform duration-700">
                            <?php endif; ?>
                        </div>
                        <div class="text-[14px] font-bold text-labelGray uppercase tracking-wider mb-3">
                            <?php echo get_the_date(); ?>
                        </div>
                        <h3 class="text-[24px] font-normal leading-snug tracking-tight text-dark group-hover:text-mediumGray transition-colors">
                            <?php the_title(); ?>
                        </h3>
                    </article>
                </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo '<p>Không tìm thấy tin tức nào.</p>';
                endif;
                ?>
            </div><div class="mt-12 text-center md:text-left">
                <a href="#"
                    class="inline-flex items-center gap-3 px-6 py-3 border border-black/10 rounded-[100vw] text-dark bg-transparent hover:bg-black hover:text-white transition-all duration-300 text-lg">
                    Xem Tất Cả Tin Tức <span class="css-arrow"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- 11. FAQ -->
    <section class="py-sectionMobile md:py-sectionDesktop">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="max-w-3xl mx-auto">
                <h2
                    class="text-[36px] md:text-[48px] font-normal leading-tight tracking-tight text-dark mb-12 text-center">
                    Câu Hỏi Thường Gặp
                </h2>
                <div class="border-t border-black">
                    <details class="group py-6 border-b border-borderColor cursor-pointer">
                        <summary
                            class="text-[20px] font-normal text-dark list-none flex justify-between items-center font-cairo outline-none">
                            Chiến lược đầu tư chính là gì?
                            <span class="text-2xl transition group-open:rotate-45">+</span>
                        </summary>
                        <p class="text-mediumGray font-normal mt-4 text-lg">Chúng tôi tập trung vào các khoản đầu tư chiến lược, dài hạn trong các lĩnh vực tăng trưởng cao, nắm giữ cổ phần chi phối hoặc thiểu số đáng kể để chủ động tạo ra giá trị.</p>
                    </details>
                    <details class="group py-6 border-b border-borderColor cursor-pointer">
                        <summary
                            class="text-[20px] font-normal text-dark list-none flex justify-between items-center font-cairo outline-none">
                            Làm thế nào để liên hệ Quan hệ Nhà đầu tư?
                            <span class="text-2xl transition group-open:rotate-45">+</span>
                        </summary>
                        <p class="text-mediumGray font-normal mt-4 text-lg">Vui lòng gửi email đến ir@company.com hoặc điền vào biểu mẫu liên hệ bên dưới. Đội ngũ của chúng tôi đặt mục tiêu phản hồi mọi thắc mắc của cổ đông trong vòng 48 giờ.
                        </p>
                    </details>
                    <details class="group py-6 border-b border-borderColor cursor-pointer">
                        <summary
                            class="text-[20px] font-normal text-dark list-none flex justify-between items-center font-cairo outline-none">
                            Trụ sở chính của công ty nằm ở đâu?
                            <span class="text-2xl transition group-open:rotate-45">+</span>
                        </summary>
                        <p class="text-mediumGray font-normal mt-4 text-lg">Trụ sở chính toàn cầu của chúng tôi đặt tại khu tài chính của Abu Dhabi, cùng với các văn phòng khu vực trải dài trên khắp châu Âu, châu Á và châu Mỹ.</p>
                    </details>
                </div>
            </div>
        </div>
    </section>

    <!-- 12. CONTACT CTA -->
    <section class="py-[120px] bg-dark text-center px-5">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-[48px] md:text-[72px] font-normal leading-tight tracking-tight text-white mb-8">
                Sẵn sàng hợp tác với chúng tôi?
            </h2>
            <p class="text-[20px] font-normal text-white/70 mb-10">
                Kết nối với đội ngũ của chúng tôi để khám phá cơ hội đầu tư, hợp tác chiến lược, hoặc liên hệ truyền thông.
            </p>
            <a href="#"
                class="inline-flex items-center gap-3 px-8 py-4 border border-transparent rounded-[100vw] text-dark bg-white hover:bg-lightGray transition-all duration-300 text-xl font-medium">
                Liên Hệ Ngay
                <span class="css-arrow"></span>
            </a>
        </div>
    </section>

    <!-- 13. FOOTER -->
    
<?php get_footer(); ?>
