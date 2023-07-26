<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/style-home-page.css') }}">
</head>
<body>

    <!-- Nội dung trang -->
    <!-- Phần Navbar -->
    <div class="navbar">
        <div class="navContainer">
            <span class="logo">Booking.com</span>
            <div class="navItems">
                <button class="navButton">Đăng ký</button>
                <button class="navButton">Đăng nhập</button>
            </div>
        </div>
    </div>
    <!-- Phần Header -->
    <div class="header">
            <div class="headerList">
                <div class="headerListItem active">
                    <i class="fas fa-bed"></i>
                    <span>Stays</span>
                </div>
                <div class="headerListItem">
                    <i class="fas fa-plane"></i>
                    <span>Flights</span>
                </div>
                <div class="headerListItem">
                    <i class="fas fa-car"></i>
                    <span>Car rentals</span>
                </div>
                <div class="headerListItem">
                    <i class="fas fa-bed"></i>
                    <span>Attractions</span>
                </div>
                <div class="headerListItem">
                    <i class="fas fa-taxi"></i>
                    <span>Airport taxis</span>
                </div>
            </div>
                <h1 class="headerTitle">A lifetime of discounts? It's Genius.</h1>
                <p class="headerDesc">
                    Get rewarded for your travels – unlock instant savings of 10% or
                    more with a free Booking.com account
                </p>
                <button class="headerBtn">Đăng nhập / Đăng ký</button>
                <div class="headerSearch">
                    <div class="headerSearchItem">
                        <i class="fas fa-bed headerIcon"></i>
                        <input
                            type="text"
                            placeholder="Bạn muốn đi đâu?"
                            class="headerSearchInput"
                            onChange="setDestination(event.target.value)"
                        />
                    </div>
                    <div class="headerSearchItem">
                        <i class="fas fa-calendar-days headerIcon"></i>
                        <span
                            onClick="setOpenDate(!openDate)"
                            class="headerSearchText"></span>
                            <div class="date">
                                <!-- Chỗ này dùng để render component "DateRange" -->
                                <!-- Tôi không dịch tiếp phần này vì đây là mã React và không thể hiển thị đầy đủ ở đây -->
                            </div>

                    </div>
                    <div class="headerSearchItem">
                        <i class="fas fa-person headerIcon"></i>
                        <span
                            onClick="setOpenOptions(!openOptions)"
                            class="headerSearchText"></span>
                            <div class="options">
                                <div class="optionItem">
                                    <span class="optionText">Người lớn</span>
                                    <div class="optionCounter">
                                        <button
                                            class="optionCounterButton"
                                            onClick="handleOption('adult', 'd')"
                                        >
                                            -
                                        </button>
                                        <button
                                            class="optionCounterButton"
                                            onClick="handleOption('adult', 'i')"
                                        >
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="optionItem">
                                    <span class="optionText">Trẻ em</span>
                                    <div class="optionCounter">
                                        <button
                                            class="optionCounterButton"
                                            onClick="handleOption('children', 'd')"
                                        >
                                            -
                                        </button>
                                        <button
                                            class="optionCounterButton"
                                            onClick="handleOption('children', 'i')"
                                        >
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="optionItem">
                                    <span class="optionText">Phòng</span>
                                    <div class="optionCounter">
                                        <button
                                            class="optionCounterButton"
                                            onClick="handleOption('room', 'd')"
                                        >
                                            -
                                        </button>
                                        <button
                                            class="optionCounterButton"
                                            onClick="handleOption('room', 'i')"
                                        >
                                            +
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="headerSearchItem">
                        <button class="headerBtn" onClick="handleSearch()">
                            Tìm kiếm
                        </button>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>