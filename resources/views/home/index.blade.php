<x-public-layout>
    <section class="bg-indigo-600 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">
                Chào mừng đến với Góc Kỷ Niệm
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-indigo-100">
                Nơi lưu giữ cảm xúc, chia sẻ khoảnh khắc và kết nối đam mê.
            </p>
            <a href="{{ route('register') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition">
                Tham gia ngay
            </a>
        </div>
    </section>

    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Khám phá</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <h3 class="text-xl font-bold mb-2">Bài viết mới</h3>
                    <p class="text-gray-600">Đọc những chia sẻ tâm huyết từ cộng đồng.</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <h3 class="text-xl font-bold mb-2">Album ảnh</h3>
                    <p class="text-gray-600">Những khoảnh khắc đáng nhớ được lưu lại.</p>
                </div>

                <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition">
                    <h3 class="text-xl font-bold mb-2">Thảo luận</h3>
                    <p class="text-gray-600">Đặt câu hỏi và nhận câu trả lời.</p>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
