<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/style-home-page.css') }}">
    <title>Booking</title>
 truong
</head>

<body>

    <!-- Khung modal -->
    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal()"><i class="ri-close-fill"></i></span>
            <h2>{{ Auth::user()->name }}</h2>
            <button onclick="logout()">Đăng xuất</button>
            <button onclick="editProfile()">Chỉnh sửa profile</button>
        </div>
    </div>

    <script>
        // JavaScript để điều khiển khung modal
        document.addEventListener("DOMContentLoaded", function() {
            const openModalBtn = document.querySelector(".user-icon a");
            const modalOverlay = document.querySelector(".modal-overlay");

            function openModal() {
                modalOverlay.style.display = "flex"; // Hiển thị khung modal
            }

            function closeModal() {
                modalOverlay.style.display = "none"; // Ẩn khung modal
            }

            function logout() {
                fetch('/logout', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    },
                })
                .then(response => {
                    if (response.ok) {
                        window.location.href = '/'; // Điều hướng về trang chủ sau khi đăng xuất
                    } else {
                        console.error('Có lỗi xảy ra khi đăng xuất');
                    }
                })
                .catch(error => {
                    console.error('Có lỗi xảy ra khi gửi yêu cầu đăng xuất', error);
                });
            }

            openModalBtn.addEventListener("click", openModal);
            modalOverlay.addEventListener("click", function(event) {
                if (event.target === modalOverlay) {
                    closeModal();
                }
            });
        });
    </script>

    <nav>
        <div class="nav__logo"><a href="/">Booking.Com</a></div>
        <ul class="nav__links">
            <li class="link"><a href="/">Home</a></li>
            <li class="link"><a href="#">Book</a></li>
            @auth
                <li class="user-icon">
                    <a href="javascript:void(0);"><i class="ri-account-pin-circle-fill"></i></a>
                </li>
            @else
                <li class="link"><a href="/login">Login</a></li>
                <li class="link"><a href="/register">Register</a></li>
            @endauth
        </ul>
    </nav>
    <header class="section__container header__container">
        <div class="header__image__container">
            <div class="header__content">
                <h1>Enjoy Your Dream Vacation</h1>
                <p>Book Hotels, Flights and stay packages at lowest price.</p>
            </div>
            <div class="booking__container">
                <form>
                    <div class="form__group">
                        <div class="input__group">
                            <input type="text" />
                            <label>Location</label>
                        </div>
                        <p>Where are you going?</p>
                    </div>
                    <div class="form__group">
                        <div class="input__group">
                            <input type="text" />
                            <label>Check In</label>
                        </div>
                        <p>Add date</p>
                    </div>
                    <div class="form__group">
                        <div class="input__group">
                            <input type="text" />
                            <label>Check Out</label>
                        </div>
                        <p>Add date</p>
                    </div>
                    <div class="form__group">
                        <div class="input__group">
                            <input type="text" />
                            <label>Room</label>
                        </div>
                        <p>Room Type</p>
                    </div>
                </form>
                <button class="btn"><i class="ri-search-line"></i></button>
            </div>
        </div>
    </header>

    <section class="section__container popular__container">
        <h2 class="section__header">Popular Hotels</h2>
        <div class="popular__grid">
            <div class="popular__card">
                <img src="assets/hotel-1.jpg" alt="popular hotel" />
                <div class="popular__content">
                    <div class="popular__card__header">
                        <h4>The Plaza Hotel</h4>
                        <h4>$499</h4>
                    </div>
                    <p>New York City, USA</p>
                </div>
            </div>
            <div class="popular__card">
                <img src="assets/hotel-2.jpg" alt="popular hotel" />
                <div class="popular__content">
                    <div class="popular__card__header">
                        <h4>Ritz Paris</h4>
                        <h4>$549</h4>
                    </div>
                    <p>Paris, France</p>
                </div>
            </div>
            <!-- ... Các phần tử của popular hotels khác ... -->
        </div>
    </section>

    <section class="client">
        <div class="section__container client__container">
            <h2 class="section__header">What our client say</h2>
            <div class="client__grid">
                <div class="client__card">
                    <img src="assets/client-1.jpg" alt="client" />
                    <p>
                        The booking process was seamless, and the confirmation was
                        instant. I highly recommend WDM&amp;Co for hassle-free hotel bookings.
                    </p>
                </div>
                <!-- ... Các phần tử client cards khác ... -->
            </div>
        </div>
    </section>

    <section class="section__container">
        <div class="reward__container">
            <p>100+ discount codes</p>
            <h4>Join rewards and discover amazing discounts on your booking</h4>
            <button class="reward__btn">Join Rewards</button>
        </div>
    </section>

    <footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__col">
                <h3>WDM&amp;Co</h3>
                <p>
                    WDM&amp;Co is a premier hotel booking website that offers a seamless and
                    convenient way to find and book accommodations worldwide.
                </p>
                <p>
                    With a user-friendly interface and a vast selection of hotels,
                    WDM&amp;Co aims to provide a stress-free experience for travelers
                    seeking the perfect stay.
                </p>
            </div>
            <div class="footer__col">
                <h4>Company</h4>
                <p>About Us</p>
                <p>Our Team</p>
                <p>Blog</p>
                <p>Book</p>
                <p>Contact Us</p>
            </div>
            <!-- ...foote ... -->
        </div>
        <div class="footer__bar">
            Copyright © 2023 Web Design Mastery. All rights reserved.
        </div>
    </footer>
</body>

</html>
>>>>>>> truong
