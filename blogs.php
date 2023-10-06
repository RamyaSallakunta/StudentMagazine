<head>
  <link rel="stylesheet" href="blogs.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link
    href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,900&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@1,100&display=swap"
    rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <style>
      .articles h2,p{
        color:black;
      }
      .desc{
        padding:1rem 9% 1rem;
      }
    </style>
</head>

<body>
  <div>
    <?php include('includes/header.php'); ?>
  </div>
  <center>
    <h1 style="font-family: 'Poppins';">Blogs</h1>
    <h2 style="font-family: 'Poppins';">Empowering Student Voices through blogging</h2>
    </center>
    <div class="desc">
    <p style="font-family: 'Poppins';color:white;">
      Welcome to the vibrant world of student blogging within our college magazine! Our student blogs are the heart and
      soul of this publication, where creativity, intellect, and expression converge. Step into the diverse minds of our
      talented students as they share their thoughts, experiences, and passions through the captivating medium of blogs.
    </p>
    <p style="font-family: 'Poppins';color:white;">
      Each blog is a unique window into the minds of our student community, offering a glimpse into their academic
      pursuits, personal interests, and cultural experiences. From thought-provoking articles on cutting-edge research
      to soul-stirring pieces of poetry, our student blogs cover a wide spectrum of topics, reflecting the richness of
      our college's intellectual and creative landscape.
    </p>
    </div>
  <section class="articles">
    <article>
      <div class="article-wrapper">
        <figure>
          <img src="boy.jpg" alt="" />
        </figure>
        <div class="article-body">
          <h2>Student Name</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis exercitationem nihil, ipsa consequuntur
            pariatur impedit hic a. Perspiciatis illo assumenda est architecto magni itaque sint.
          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <article>

      <div class="article-wrapper">
        <figure>
          <img src="girl.jpg" alt="" />
        </figure>
        <div class="article-body">
          <h2>Student Name</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis exercitationem nihil, ipsa consequuntur
            pariatur impedit hic a. Perspiciatis illo assumenda est architecto magni itaque sint.
          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
    <article>

      <div class="article-wrapper">
        <figure>
          <img src="girl2.jpg" alt="" />
        </figure>
        <div class="article-body">
          <h2>Student Name</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis exercitationem nihil, ipsa consequuntur
            pariatur impedit hic a. Perspiciatis illo assumenda est architecto magni itaque sint.
          </p>
          <a href="#" class="read-more">
            Read more <span class="sr-only">about this is some title</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </article>
  </section>
  <center>
    <p style="font-family: 'Poppins';color:white;">So, join us on this thrilling journey of exploration and discovery in our college magazine's blogosphere.<a
        href="cform.php" style="text-decoration:none;color:orange;">Click Here</a></p>
  </center>
  <!-- <div><?php include('includes/footer.php'); ?></div> -->
</body>