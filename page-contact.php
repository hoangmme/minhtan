<?php
/**
 * Template Name: Liên Hệ
 */
get_header(); ?>

<main class="w-full bg-white">
    <!-- Hero Section -->
    <section class="pt-sectionMobile pb-[80px] md:pt-sectionDesktop md:pb-[80px]">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="max-w-4xl">
                <h1 class="text-5xl md:text-7xl font-normal leading-tight tracking-tight text-dark mb-8">
                    Liên Hệ.
                </h1>
                <p class="text-2xl md:text-3xl font-normal text-mediumGray leading-relaxed max-w-3xl">
                    Kết nối với đội ngũ của chúng tôi để khám phá các cơ hội hợp tác, đầu tư hoặc các vấn đề truyền thông.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Info & Form -->
    <section class="pb-sectionMobile md:pb-sectionDesktop">
        <div class="max-w-ihcContainer mx-auto px-5 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-24 border-t border-black/10 pt-16">
                <!-- Contact Info -->
                <div>
                    <h3 class="text-2xl font-normal text-dark mb-8">Thông Tin Liên Hệ</h3>
                    <div class="space-y-8">
                        <div>
                            <h4 class="text-sm font-bold text-labelGray uppercase tracking-wider mb-2">Trụ Sở Chính</h4>
                            <p class="text-lg font-normal text-dark">
                                Tháp IHC, Quận Tài Chính<br>
                                Abu Dhabi, UAE
                            </p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-labelGray uppercase tracking-wider mb-2">Email</h4>
                            <a href="mailto:info@ihcuae.com" class="text-lg font-normal text-dark hover:opacity-70 transition-opacity">info@ihcuae.com</a>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-labelGray uppercase tracking-wider mb-2">Điện Thoại</h4>
                            <a href="tel:+97120000000" class="text-lg font-normal text-dark hover:opacity-70 transition-opacity">+971 2 000 0000</a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <h3 class="text-2xl font-normal text-dark mb-8">Gửi Tin Nhắn</h3>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-labelGray uppercase tracking-wider mb-2">Họ & Tên</label>
                                <input type="text" class="w-full border-b border-black/20 pb-2 text-dark font-normal focus:outline-none focus:border-dark transition-colors" placeholder="Nhập tên của bạn">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-labelGray uppercase tracking-wider mb-2">Email</label>
                                <input type="email" class="w-full border-b border-black/20 pb-2 text-dark font-normal focus:outline-none focus:border-dark transition-colors" placeholder="Nhập email">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-labelGray uppercase tracking-wider mb-2">Chủ đề</label>
                            <input type="text" class="w-full border-b border-black/20 pb-2 text-dark font-normal focus:outline-none focus:border-dark transition-colors" placeholder="Bạn muốn hỏi về vấn đề gì?">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-labelGray uppercase tracking-wider mb-2">Lời nhắn</label>
                            <textarea rows="4" class="w-full border-b border-black/20 pb-2 text-dark font-normal focus:outline-none focus:border-dark transition-colors resize-none" placeholder="Chi tiết lời nhắn..."></textarea>
                        </div>
                        <button type="button" class="mt-4 inline-flex items-center gap-3 px-8 py-4 bg-dark text-white rounded-[100vw] font-normal hover:bg-black/80 transition-colors">
                            Gửi Ngay
                            <span class="css-arrow border-white" style="transform: rotate(45deg); margin-bottom: 2px;"></span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
