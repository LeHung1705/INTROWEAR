    @extends('layouts.app')
  @push('styles')
  <link rel="stylesheet" href="{{ asset('assets/css/aboutus.css') }}" />
@endpush

@section('content')
  <div class="container">
      <!-- Page Title -->
      <div class="page-heading">
        <h1>ABOUT US</h1>
      </div>

      <!-- Logo chữ INTROWEAR -->
      <img
        src="{{asset('assets/images/logo.png')}}"
        alt="INTROWEAR Text Logo"
        class="intro-text-logo"
      />
      <!-- Banner ảnh Matching -->
      <img
        src="{{asset('assets/images/banner_trangchu.png')}}"
        alt="INTROWEAR Banner"
        class="banner"
      />

      <!-- Main Content -->
      <main class="intro-main">
        <span>Đây là INTROWEAR.</span>
        <p>
          Không chỉ là một thương hiệu, chúng tôi là một tập thể những người có
          tư duy tự do lan tỏa<br />
          trong cộng đồng sáng tạo bao gồm thời trang, âm nhạc, thể thao, văn
          hóa đại chúng<br />
          và nhiều lĩnh vực khác.<br />
          Chúng tôi ở đây để truyền cảm hứng cho một thế hệ trẻ mới đang tìm
          kiếm công cụ nghệ<br />
          thuật để thể hiện bản thân – chúng tôi tin rằng sự cá nhân hóa nên
          được tôn vinh thông<br />
          qua việc chọn lọc có chủ đích những khoảnh khắc phong phú nhất<br />
          trong cuộc sống hàng ngày, và biến chúng thành nghệ thuật.<br />
          Nguyên lý cốt lõi của chúng tôi xoay quanh các khái niệm chính của một
          thương hiệu thực<br />
          sự “sáng tạo – chất & kết nối”; và nhờ đó, ghi lại những khoảnh
          khắc<br />
          phong phú nhất trong đời sống thường nhật, biến chúng thành nghệ thuật
          đương đại.
        </p>
      </main>

      <!-- Final Intro Section -->
      <section class="intro-final">
        <img
          src="/Website/assets/images/logo_trangchu.png"
          alt="IntroWear Logo"
          class="intro-logo"
        />

        <p>Chúng tôi sống để tạo nên những khoảnh khắc táo bạo</p>
        <br />
        <p>
          Tại INTROWEAR, chúng tôi tin rằng mỗi khoảnh khắc trong đời đều có thể
          trở thành<br />
          một tác phẩm nghệ thuật – khi được nhìn qua lăng kính của sự sáng tạo
          và bản lĩnh.<br />

          Sứ mệnh của chúng tôi là đánh thức khả năng tự thể hiện và sự độc
          đáo<br />
          không sợ hãi trong mỗi con người.<br />

          Từ những tuyên ngôn mạnh mẽ trên đường phố đến những phút giây trầm
          lắng nội tâm,<br />
          chúng tôi chuyển hóa trải nghiệm thường nhật thành những thiết kế vượt
          thời gian –<br />
          kết nối với văn hóa, cảm xúc và sự đổi mới thành nghệ thuật có thể
          chạm tới.<br />

          Đây không chỉ là thời trang. Đây là một phong trào.<br />
          Một tư duy. Một <span style="letter-spacing: 1px">INTROWEAR</span>.
        </p>
      </section>
    </div>
    @endsection