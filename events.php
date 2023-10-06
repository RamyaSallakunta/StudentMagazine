<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events</title>
  <link href="events.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />

  <style>
    .desc{
        padding:1rem 9% 1rem;
      }
    p{
      /* text-align:center; */
      justify-content: left;
      line-height:1.5;
    }
    .events-content h1 {
      font-size: 2.3rem;
      font-weight: 550;
      text-align: center;
      /* line-height: 2; */
    }

    .events-content h2 {
      font-size: 1.3rem;
      font-weight: 700;
      text-align: center;
      /* line-height: 2; */
    }



    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: "Poppins";
    }

    body {
  background-color: #607681;
}

    .content-wrapper {
      margin: 0 auto;
      max-width: 1200px;
      display: flex;
      flex-flow: row wrap;
      justify-content: center;
      padding: 0.5rem;
    }

    .news-card {
      border: 0px solid aqua;
      margin: 0.5rem;
      position: relative;
      height: 12rem;
      overflow: hidden;
      border-radius: 0.5rem;
      flex: 1;
      min-width: 290px;
      box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
      -webkit-backface-visibility: hidden;
      -moz-backface-visibility: hidden;
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
    }

    .news-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0) linear-gradient(to bottom, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.7) 80%);
      z-index: 0;
    }

    .news-card__card-link {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }

    .news-card__image {
      width: 100%;
      height: 100%;
      display: block;
      object-fit: cover;
      transition: transform 3s ease;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      position: relative;
      z-index: -1;
    }

    .news-card__text-wrapper {
      position: absolute;
      bottom: 0rem;
      padding: 1rem;
      color: white;
      transition: background-color 1.5s ease;
    }

    .news-card__title {
      transition: color 1s ease;
      margin-bottom: 0.5rem;
    }

    .news-card__post-date {
      font-size: 0.7rem;
      margin-bottom: 0.5rem;
      color: #CCC;
    }

    .news-card__details-wrapper {
      max-height: 0;
      opacity: 0;
      transition: max-height 1.5s ease, opacity 1s ease;
    }

    .news-card__excerpt {
      font-weight: 300;
    }

    .news-card__read-more {
      background: black;
      color: #bbb;
      display: block;
      padding: 0.4rem 0.6rem;
      border-radius: 0.3rem;
      margin-top: 1rem;
      border: 1px solid #444;
      font-size: 0.8rem;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
      text-decoration: none;
      width: 7rem;
      margin-left: auto;
      position: relative;
      z-index: 5;
    }

    .news-card__read-more i {
      position: relative;
      left: 0.2rem;
      color: #888;
      transition: left 0.5s ease, color 0.6s ease;
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden;
    }

    .news-card__read-more:hover i {
      left: 0.5rem;
      color: yellow;
    }

    @media (min-width: 600px) {
      .news-card {
        height: 12rem;
      }
    }

    @media (min-width: 900px) {
      .news-card {
        height: 20rem;
      }

      .news-card:hover .news-card__details-wrapper {
        max-height: 20rem;
        opacity: 1;
      }

      .news-card:hover .news-card__text-wrapper {
        background-color: rgba(0, 0, 0, 0.6);
      }

      .news-card:hover .news-card__title {
        color: yellow;
      }

      .news-card:hover .news-card__image {
        transform: scale(1.2);
        z-index: -1;
      }
    }
    .cal {
    -webkit-font-smoothing: antialiased;
    font-family: "Montserrat", sans-serif;
    text-rendering: optimizeLegibility;
    /* background: #fcfcfc; */
  }
  
  .mock-up-link {
    display: none;
  }
  @media (min-width: 768px) {
    .mock-up-link {
      display: block;
    }
  }
  
  .main-container-wrapper {
    background-color: #F8FAFA;
    min-width: 320px;
    min-height: 568px;
    max-width: 414px;
    overflow-y: auto;
  }
  @media (min-width: 415px) {
    .main-container-wrapper {
      -moz-box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
      -webkit-box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
      box-shadow: 0px 32px 47px rgba(32, 23, 23, 0.09);
      margin: 24px auto;
    }
  }
  
  header {
    background-color: #fff;
    display: flex;
    height: 58px;
    justify-content: space-between;
    overflow: hidden;
    position: relative;
  }
  
  .header__btn {
    background-color: #86D8C9;
    border: 2px solid #fff;
    border-radius: 50%;
    -moz-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    height: 80px;
    padding-top: 18px;
    position: absolute;
    top: -25px;
    width: 80px;
  }
  .header_btn:hover, .header_btn:focus {
    background: #67cebb;
    transition: all 0.3s ease-in;
    outline: none;
  }
  .header__btn .icon {
    display: inline-block;
  }
  .header__btn--left {
    left: -25px;
    padding-left: 38px;
    text-align: left;
  }
  .header__btn--right {
    padding-right: 32px;
    right: -25px;
    text-align: right;
  }
  
  .calendar-container {
    background-color: #fff;
    padding: 16px;
    margin-bottom: 24px;
  }
  .calendar-container__header {
    display: flex;
    justify-content: space-between;
  }
  .calendar-container__btn {
    background: transparent;
    border: 0;
    cursor: pointer;
    font-size: 16px;
    outline: none;
    color: #E9E8E8;
  }
  .calendar-container_btn:hover, .calendar-container_btn:focus {
    color: #9FAAB7;
    transition: all 0.3s ease-in;
  }
  .calendar-container__title {
    color: #222741;
    font-size: 20px;
    font-weight: 700;
  }
  
  .calendar-table {
    margin-top: 12px;
    width: 100%;
  }
  .calendar-table__item {
    border: 2px solid transparent;
    border-radius: 50%;
    color: #424588;
    font-size: 12px;
    font-weight: 700;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }
  .calendar-table__item:hover {
    background: #f8fafa;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    transition: 0.2s all ease-in;
  }
  .calendar-table__row {
    display: flex;
    justify-content: center;
  }
  .calendar-table__header {
    border-bottom: 2px solid #F2F6F8;
    margin-bottom: 4px;
  }
  .calendar-table_header .calendar-table_col {
    display: inline-block;
    color: #99A4AE;
    font-size: 12px;
    font-weight: 700;
    padding: 12px 3px;
    text-align: center;
    text-transform: uppercase;
    width: 40px;
    height: 38px;
  }
  @media (min-width: 360px) {
    .calendar-table_header .calendar-table_col {
      width: 46px;
    }
  }
  @media (min-width: 410px) {
    .calendar-table_header .calendar-table_col {
      width: 54px;
    }
  }
  .calendar-table_body .calendar-table_col {
    width: 40px;
    height: 42px;
    padding-bottom: 2px;
  }
  @media (min-width: 360px) {
    .calendar-table_body .calendar-table_col {
      width: 46px;
      height: 48px;
    }
  }
  @media (min-width: 410px) {
    .calendar-table_body .calendar-table_col {
      width: 54px;
      height: 56px;
    }
  }
  .calendar-table_today .calendar-table_item {
    border-color: #FEFEFE;
    background-color: #F2F6F8;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  }
  .calendar-table_event .calendar-table_item {
    background-color: #66DCEC;
    border-color: #FEFEFE;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    color: #fff;
  }
  .calendar-table__event--long {
    overflow-x: hidden;
  }
  .calendar-table_event--long .calendar-table_item {
    border-radius: 0;
    border-width: 2px 0;
  }
  .calendar-table_event--start .calendar-table_item {
    border-left: 2px solid #fff;
    border-radius: 50% 0 0 50%;
  }
  .calendar-table_event--start.calendar-tablecol:last-child .calendar-table_item {
    border-width: 2px;
  }
  .calendar-table_event--end .calendar-table_item {
    border-right: 2px solid #fff;
    border-radius: 0 50% 50% 0;
  }
  .calendar-table_event--end.calendar-tablecol:first-child .calendar-table_item {
    border-width: 2px;
  }
  .calendar-table_inactive .calendar-table_item {
    color: #DCDCE3;
    cursor: default;
  }
  .calendar-table_inactive .calendar-table_item:hover {
    background: transparent;
    box-shadow: none;
  }
  .calendar-table_inactive.calendar-tableevent .calendar-table_item {
    color: #fff;
    opacity: 0.25;
  }
  .calendar-table_inactive.calendar-tableevent .calendar-table_item:hover {
    background: #66DCEC;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  }
  
  .events-container {
    padding: 0 15px;
  }
  
  .events__title {
    color: #BEC1CA;
    display: inline-block;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 16px;
  }
  .events__tag {
    background: #66DCEC;
    border: 2px solid #FEFEFE;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
    border-radius: 20px;
    color: #fff;
    font-size: 10px;
    font-weight: 600;
    width: 60px;
    margin-left: 16px;
    padding: 5px 2px;
    text-align: center;
  }
  .events__tag--highlighted {
    background: #FDCA40;
  }
  .events__item {
    background: #fff;
    border-left: 8px solid #86D8C9;
    border-radius: 2px;
    -moz-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
    -webkit-box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.05);
    padding: 15px 16px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
  }
  .events__item--left {
    width: calc(100% - 76px);
  }
  .events__name {
    font-size: 12px;
    font-weight: 700;
    color: #222741;
    display: block;
    margin-bottom: 6px;
  }
  .events__date {
    font-size: 12px;
    color: #9FAAB7;
    display: inline-block;
  }
    
  </style>
</head>
<?php include('includes/header.php');?>
<div class="cal">
  <section class="events">
    <div class="events-content">
      <h1>Events</h1>
      <h2>Discover, Engage, and Celebrate: Student Event Showcase</h2>
    </div>
    <br>
    <div class="desc">
    <p>
      Our college magazine takes great pride in curating a diverse range of events that cater to the multifaceted interests and passions of our student body. From academic symposiums to artistic exhibitions, sports competitions, and cultural festivals, these events are the heartbeat of our college community. They serve as a space for students to explore their potential, celebrate their achievements, and cultivate lasting friendships. Through these events, we aim to build an inclusive and vibrant campus that cherishes the uniqueness of every individual.
    </p>
    </div>
    <br>
    <div class="content-wrapper">

      <div class="news-card">
        <a href="#" class="news-card__card-link"></a>
        <img src="e1.jpeg" alt="" class="news-card__image">
        <div class="news-card__text-wrapper">
          <h2 class="news-card__title">Image Title</h2>
          <div class="news-card__post-date">July 31, 2023</div>
          <div class="news-card__details-wrapper">
            <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi
              temporibus ab nemo. Omnis quae cum unde corrupti expedita dolore!</p>
            <!-- <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a> -->
          </div>
        </div>
      </div>

      <div class="news-card">
        <a href="#" class="news-card__card-link"></a>
        <img src="e4.jpeg" alt="" class="news-card__image">
        <div class="news-card__text-wrapper">
          <h2 class="news-card__title">Image Title</h2>
          <div class="news-card__post-date">July 31, 2023</div>
          <div class="news-card__details-wrapper">
            <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi
              temporibus ab nemo. Omnis quae cum unde corrupti expedita dolore!</p>
            <!-- <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a> -->
          </div>
        </div>
      </div>

      <div class="news-card">
        <a href="#" class="news-card__card-link"></a>
        <img src="e7.jpeg" alt="" class="news-card__image">
        <div class="news-card__text-wrapper">
          <h2 class="news-card__title">Image Title</h2>
          <div class="news-card__post-date">July 31, 2023</div>
          <div class="news-card__details-wrapper">
            <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi
              temporibus ab nemo. Omnis quae cum unde corrupti expedita dolore!</p>
            <!-- <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a> -->
          </div>
        </div>
      </div>

      <div class="news-card">
        <a href="#" class="news-card__card-link"></a>
        <img src="e8.jpeg" alt="" class="news-card__image">
        <div class="news-card__text-wrapper">
          <h2 class="news-card__title">Image Title</h2>
          <div class="news-card__post-date">July 31, 2023</div>
          <div class="news-card__details-wrapper">
            <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi
              temporibus ab nemo. Omnis quae cum unde corrupti expedita dolore!</p>
            <!-- <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a> -->
          </div>
        </div>
      </div>

      <div class="news-card">
        <a href="#" class="news-card__card-link"></a>
        <img src="e10.jpg" alt="" class="news-card__image">
        <div class="news-card__text-wrapper">
          <h2 class="news-card__title">Image Title</h2>
          <div class="news-card__post-date">July 31, 2023</div>
          <div class="news-card__details-wrapper">
            <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi
              temporibus ab nemo. Omnis quae cum unde corrupti expedita dolore!</p>
            <!-- <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a> -->
          </div>
        </div>
      </div>

      <div class="news-card">
        <a href="#" class="news-card__card-link"></a>
        <img src="e3.jpeg" alt="" class="news-card__image">
        <div class="news-card__text-wrapper">
          <h2 class="news-card__title">Image Title</h2>
          <div class="news-card__post-date">July 31, 2023</div>
          <div class="news-card__details-wrapper">
            <p class="news-card__excerpt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque commodi
              temporibus ab nemo. Omnis quae cum unde corrupti expedita dolore!</p>
            <!-- <a href="#" class="news-card__read-more">Read more <i class="fas fa-long-arrow-alt-right"></i></a> -->
          </div>
        </div>
      </div>

    </div>
  </section>
  <body>
<br> <br>
<div class="events-content">
  <h1>Save the Dates</h1>
  <h2>Exciting Upcoming Events in Our College!</h2>
</div>
<div class="desc">
<p>
  Prepare to be enthralled and captivated as our college magazine presents an exciting lineup of upcoming events that promise to ignite your passions, challenge your intellect, and celebrate the vibrant spirit of our student community. From engaging workshops to thrilling competitions and cultural extravaganzas, these events are carefully curated to provide you with unforgettable experiences and enrich your college journey. Mark your calendars and get ready to embark on a thrilling adventure of learning, creativity, and camaraderie!
</p>
</div>
<br>
    <div class="main-container-wrapper">
        <header>
            <button class="header_btn header_btn--left" title="Menu">
                <svg class="icon" width="20px" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#fff" d="M0 0h20v2H0zM0 7h20v2H0zM0 14h20v2H0z" />
                </svg>
            </button>
            <button class="header_btn header_btn--right" title="Add event">
                <svg class="icon" width="26px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#fff"
                        d="M416 277.333H277.333V416h-42.666V277.333H96v-42.666h138.667V96h42.666v138.667H416v42.666z" />
                </svg>
            </button>
        </header>
        <main>
            <div class="calendar-container">
                <div class="calendar-container__header">
                    <button class="calendar-container_btn calendar-container_btn--left" title="Previous">
                        <i class="icon ion-ios-arrow-back"></i>
                    </button>
                    <h2 class="calendar-container__title">August 2023</h2>
                    <button class="calendar-container_btn calendar-container_btn--right" title="Next">
                        <i class="icon ion-ios-arrow-forward"></i>
                    </button>
                </div>
                <div class="calendar-container__body">
                    <div class="calendar-table">
                        <div class="calendar-table__header">
                            <div class="calendar-table__row">
                                <div class="calendar-table__col">S</div>
                                <div class="calendar-table__col">M</div>
                                <div class="calendar-table__col">T</div>
                                <div class="calendar-table__col">W</div>
                                <div class="calendar-table__col">T</div>
                                <div class="calendar-table__col">F</div>
                                <div class="calendar-table__col">S</div>
                            </div>
                        </div>
                        <div class="calendar-table__body">
                            <div class="calendar-table__row">
                                <div class="calendar-table_col calendar-table_inactive">
                                    <div class="calendar-table__item">
                                        <span>30</span>
                                    </div>
                                </div>
                                <div class="calendar-table_col calendar-table_today">
                                    <div class="calendar-table__item">
                                        <span>1</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>2</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>4</span>
                                    </div>
                                </div>
                                <div class="calendar-table_col calendar-table_event">
                                    <div class="calendar-table__item">
                                        <span>5</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>6</span>
                                    </div>
                                </div>
                            </div>
                            <div class="calendar-table__row">
                                <div class="calendar-table_col calendar-table_event">
                                    <div class="calendar-table__item">
                                        <span>7</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>8</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>9</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>10</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>11</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>12</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>13</span>
                                    </div>
                                </div>
                            </div>
                            <div class="calendar-table__row">
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>14</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>15</span>
                                    </div>
                                </div>
                                <div
                                    class="calendar-table_col calendar-tableevent calendar-tableevent--long calendar-table_event--start">
                                    <div class="calendar-table__item">
                                        <span>16</span>
                                    </div>
                                </div>
                                <div class="calendar-table_col calendar-tableevent calendar-table_event--long">
                                    <div class="calendar-table__item">
                                        <span>17</span>
                                    </div>
                                </div>
                                <div
                                    class="calendar-table_col calendar-tableevent calendar-tableevent--long calendar-table_event--end">
                                    <div class="calendar-table__item">
                                        <span>18</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>19</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>20</span>
                                    </div>
                                </div>
                            </div>
                            <div class="calendar-table__row">
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>21</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>22</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>23</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>24</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>25</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>26</span>
                                    </div>
                                </div>
                                <div
                                    class="calendar-table_col calendar-tableevent calendar-tableevent--long calendar-table_event--start">
                                    <div class="calendar-table__item">
                                        <span>27</span>
                                    </div>
                                </div>
                            </div>
                            <div class="calendar-table__row">
                                <div
                                    class="calendar-table_col calendar-tableevent calendar-tableevent--long calendar-table_event--end">
                                    <div class="calendar-table__item">
                                        <span>28</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>29</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>30</span>
                                    </div>
                                </div>
                                <div class="calendar-table__col">
                                    <div class="calendar-table__item">
                                        <span>31</span>
                                    </div>
                                </div>
                                <div class="calendar-table_col calendar-tableevent calendar-table_inactive">
                                    <div class="calendar-table__item">
                                        <span>1</span>
                                    </div>
                                </div>
                                <div class="calendar-table_col calendar-table_inactive">
                                    <div class="calendar-table__item">
                                        <span>2</span>
                                    </div>
                                </div>
                                <div class="calendar-table_col calendar-table_inactive">
                                    <div class="calendar-table__item">
                                        <span>3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="events-container">
                <span class="events__title">Upcoming events this month</span>
                <ul class="events__list">
                    <li class="events__item">
                        <div class="events__item--left">
                            <span class="events__name">Sports Club Launch</span>
                            <span class="events__date">Aug 5</span>
                        </div>
                        <span class="events__tag">16:00</span>
                    </li>
                    <li class="events__item">
                        <div class="events__item--left">
                            <span class="events__name">AR/VR Workshop</span>
                            <span class="events__date">Aug 7</span>
                        </div>
                        <span class="events__tag">10:00</span>
                    </li>
                    <li class="events__item">
                        <div class="events__item--left">
                            <span class="events__name">Industrial Trip</span>
                            <span class="events__date">Aug 16 - Aug 18</span>
                        </div>
                        <span class="events_tag events_tag--highlighted">All day</span>
                    </li>
                    <li class="events__item">
                        <div class="events__item--left">
                            <span class="events__name">Silver Jubilee Celebrations</span>
                            <span class="events__date">Aug 27</span>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
    </div>
  </div>


  <?php include('includes/footer.php');?>
</body>

</html>