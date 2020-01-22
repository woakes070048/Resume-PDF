<?php

$faker = Faker\Factory::create();

?><!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Resume Title</title>
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <style type="text/css">
    tr, td {
      page-break-inside: avoid;
    }

    .page-title,
    .page-subtitle {
      font-family: 'Roboto';
    }

    .page-title {
      font-weight: 100;
      font-size: 3.5rem;
    }
    .page-subtitle {
      font-weight: 500;
      font-size: 1.6rem;
    }

    .avatar {
      object-fit: cover;
      border-radius: 50%;
      /*width: 330px;
      height: 330px;*/
    }
    .icon,
    .inline-icon {
      fill: #222;
      width:24px;
      height:24px;
      margin-top:-5px;
    }

    .icon-s {
      margin-top:-4px;
      width:18px;
      height:18px;
      fill: #333;
    }

    .inline-icon {
      display: inline;
      margin-right: 2px;
    }
    </style>
    </head>
  <body>
    <div class="page">
      <div class="inner-page">
        <div class="container-fluid">
          <div class="row">
            <div class="col-8">
              <div class="page-title">{{ $faker->firstNameFemale . ' ' . $faker->lastName }}</div>
              <div class="page-subtitle mt-1">{{ $faker->jobTitle }}</div>

              <div class="row mt-4">
                <div class="col">
                  <h1 class="display-4">Experience éßçè</h1>
                </div>
              </div>

              <div class="row my-4">
                <div class="col">
                  <p class="text-justify">
                      Praesent ultricies ante non mi mattis, non convallis mi vulputate. Nullam sollicitudin quam sit amet nibh pretium placerat.
                  </p>
                </div>
              </div>

              <div class="row my-4">
                <div class="col">
                  <table class="table table-striped mt-4 mb-5 shadow">
<?php
foreach ($experience as $item) {
?>
                <tr>
                  <td>
                  <div class="container-fluid">
                    <div class="row mb-2">
                      <div class="col-1">
                        <svg class="icon icon-s" viewBox="0 0 24 24">
                          <path d="M9,10H7V12H9V10M13,10H11V12H13V10M17,10H15V12H17V10M19,3H18V1H16V3H8V1H6V3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5A2,2 0 0,0 19,3M19,19H5V8H19V19Z" />
                        </svg>
                      </div>
                      <div class="col-11">
                        {{ $item['when'] }}
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-1">
                        <svg class="icon icon-s" viewBox="0 0 24 24">
<?php if ($item['type'] == 'education') { ?>
                          <?php /*<path d="M14 13V11L12 12L10 11V13L8 14L10 15V17L12 16L14 17V15L16 14M14 2H7A2 2 0 0 0 5 4V18A2 2 0 0 0 7 20H8V18H7V4H13V8H17V18H16V20H17A2 2 0 0 0 19 18V7M14 13V11L12 12L10 11V13L8 14L10 15V17L12 16L14 17V15L16 14M10 23L12 22L14 23V18H10M14 13V11L12 12L10 11V13L8 14L10 15V17L12 16L14 17V15L16 14Z" />*/ ?>
                          <path d="M12,3L1,9L12,15L21,10.09V17H23V9M5,13.18V17.18L12,21L19,17.18V13.18L12,17L5,13.18Z" />
<?php } elseif ($item['type'] == 'work') { ?>
                          <path d="M18,15H16V17H18M18,11H16V13H18M20,19H12V17H14V15H12V13H14V11H12V9H20M10,7H8V5H10M10,11H8V9H10M10,15H8V13H10M10,19H8V17H10M6,7H4V5H6M6,11H4V9H6M6,15H4V13H6M6,19H4V17H6M12,7V3H2V21H22V7H12Z" />
<?php } ?>
                        </svg>
                      </div>
                      <div class="col-11">
                      {{ $item['where'] }}
                      </div>
                    </div>
                    <div class="row mb-2">
                      <div class="col-1">
                        <svg class="icon icon-s" viewBox="0 0 24 24">
                          <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                        </svg>
                      </div>
                      <div class="col-11">
                      {{ $item['location'] }}
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-1">
                      </div>
                      <div class="col-11">
                        {{ $item['what'] }}
                      </div>
                    </div>
                  </div>

                  </td>
                </tr>

<?php
}
?>
                  </table>
                </div>
              </div>

            </div>
            <div class="col-4">
              <img src="{{ url('img/avatar.jpg') }}" class="avatar img-fluid">

              <h3 class="text-uppercase mt-5 mb-3">Profile</h3>

              <p class="lead">Entrepreneur and Full Stack Web Developer.</p>
              <p class="lead">
                <span class="badge badge-secondary">UI/UX</span>
                <span class="badge badge-secondary">PHP</span>
                <span class="badge badge-secondary">Laravel</span>
                <span class="badge badge-secondary">Vue</span>
                <span class="badge badge-secondary">SQL</span>
                <span class="badge badge-secondary">NoSQL</span>
                <span class="badge badge-secondary">JavaScript</span>
                <span class="badge badge-secondary">TypeScript</span>
                <span class="badge badge-secondary">HTML</span>
                <span class="badge badge-secondary">SEO</span>
                <span class="badge badge-secondary">CSS</span>
                <span class="badge badge-secondary">Bootstrap</span>
                <span class="badge badge-secondary">SASS</span>
                <span class="badge badge-secondary">LESS</span>
                <span class="badge badge-secondary">Git</span>
                <span class="badge badge-secondary">Apache</span>
                <span class="badge badge-secondary">Unix</span>
                <span class="badge badge-secondary">Photoshop</span>
                <span class="badge badge-secondary">Illustrator</span>
                <span class="badge badge-secondary">Marketing</span>
              </p>

              <h3 class="text-uppercase mt-5 mb-3">Contact</h3>

              <table class="table table-borderless">
                <tr>
                  <td width="45">
                    <svg class="icon" viewBox="0 0 24 24">
                      <path d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
                    </svg>
                  </td>
                  <td>+31 (0)6 24 37 80 09</td>
                </tr><?php /*
                <tr>
                  <td width="45">
                    <svg class="icon" viewBox="0 0 24 24">
                      <path d="M18,6C20.07,8.04 20.85,10.89 20.36,13.55C20.77,14.27 21,15.11 21,16A5,5 0 0,1 16,21C15.11,21 14.27,20.77 13.55,20.36C10.89,20.85 8.04,20.07 6,18C3.93,15.96 3.15,13.11 3.64,10.45C3.23,9.73 3,8.89 3,8A5,5 0 0,1 8,3C8.89,3 9.73,3.23 10.45,3.64C13.11,3.15 15.96,3.93 18,6M12.04,17.16C14.91,17.16 16.34,15.78 16.34,13.92C16.34,12.73 15.78,11.46 13.61,10.97L11.62,10.53C10.86,10.36 10,10.13 10,9.42C10,8.7 10.6,8.2 11.7,8.2C13.93,8.2 13.72,9.73 14.83,9.73C15.41,9.73 15.91,9.39 15.91,8.8C15.91,7.43 13.72,6.4 11.86,6.4C9.85,6.4 7.7,7.26 7.7,9.54C7.7,10.64 8.09,11.81 10.25,12.35L12.94,13.03C13.75,13.23 13.95,13.68 13.95,14.1C13.95,14.78 13.27,15.45 12.04,15.45C9.63,15.45 9.96,13.6 8.67,13.6C8.09,13.6 7.67,14 7.67,14.57C7.67,15.68 9,17.16 12.04,17.16Z" />
                    </svg>
                  </td>
                  <td>s.kokhuis</td>
                </tr>*/ ?>
                <tr>
                  <td>
                    <svg class="icon" viewBox="0 0 24 24">
                      <path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6M20 6L12 11L4 6H20M20 18H4V8L12 13L20 8V18Z" />
                    </svg>
                  </td>
                  <td><a href="mailto:info@s3m.nl" class="link" target="_blank">info@s3m.nl</a></td>
                </tr>
                <tr>
                  <td width="45">
                    <svg class="icon" viewBox="0 0 24 24">
                      <path d="M16.36,14C16.44,13.34 16.5,12.68 16.5,12C16.5,11.32 16.44,10.66 16.36,10H19.74C19.9,10.64 20,11.31 20,12C20,12.69 19.9,13.36 19.74,14M14.59,19.56C15.19,18.45 15.65,17.25 15.97,16H18.92C17.96,17.65 16.43,18.93 14.59,19.56M14.34,14H9.66C9.56,13.34 9.5,12.68 9.5,12C9.5,11.32 9.56,10.65 9.66,10H14.34C14.43,10.65 14.5,11.32 14.5,12C14.5,12.68 14.43,13.34 14.34,14M12,19.96C11.17,18.76 10.5,17.43 10.09,16H13.91C13.5,17.43 12.83,18.76 12,19.96M8,8H5.08C6.03,6.34 7.57,5.06 9.4,4.44C8.8,5.55 8.35,6.75 8,8M5.08,16H8C8.35,17.25 8.8,18.45 9.4,19.56C7.57,18.93 6.03,17.65 5.08,16M4.26,14C4.1,13.36 4,12.69 4,12C4,11.31 4.1,10.64 4.26,10H7.64C7.56,10.66 7.5,11.32 7.5,12C7.5,12.68 7.56,13.34 7.64,14M12,4.03C12.83,5.23 13.5,6.57 13.91,8H10.09C10.5,6.57 11.17,5.23 12,4.03M18.92,8H15.97C15.65,6.75 15.19,5.55 14.59,4.44C16.43,5.07 17.96,6.34 18.92,8M12,2C6.47,2 2,6.5 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                    </svg>
                  </td>
                  <td>https://example.com</td>
                </tr>
                <tr>
                  <td>
                    <svg class="icon" viewBox="0 0 24 24">
                      <path d="M21,21H17V14.25C17,13.19 15.81,12.31 14.75,12.31C13.69,12.31 13,13.19 13,14.25V21H9V9H13V11C13.66,9.93 15.36,9.24 16.5,9.24C19,9.24 21,11.28 21,13.75V21M7,21H3V9H7V21M5,3A2,2 0 0,1 7,5A2,2 0 0,1 5,7A2,2 0 0,1 3,5A2,2 0 0,1 5,3Z" />
                    </svg>
                  </td>
                  <td><a href="https://www.linkedin.com/in/semkokhuis" class="link" target="_blank">linkedin.com/in/semkokhuis</a></td>
                </tr>
                <tr>
                  <td>
                    <svg class="icon" viewBox="0 0 24 24">
                      <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                    </svg>
                  </td>
                  <td>
                  Address line 1<br>
                  Address line 2<br>
                  Nuenen, Netherlands
                  </td>
                </tr>
                <tr>
                  <td width="45">
                    <svg class="icon" viewBox="0 0 24 24">
                      <path d="M12.87,15.07L10.33,12.56L10.36,12.53C12.1,10.59 13.34,8.36 14.07,6H17V4H10V2H8V4H1V6H12.17C11.5,7.92 10.44,9.75 9,11.35C8.07,10.32 7.3,9.19 6.69,8H4.69C5.42,9.63 6.42,11.17 7.67,12.56L2.58,17.58L4,19L9,14L12.11,17.11L12.87,15.07M18.5,10H16.5L12,22H14L15.12,19H19.87L21,22H23L18.5,10M15.88,17L17.5,12.67L19.12,17H15.88Z" />
                    </svg>
                  </td>
                  <td>Dutch (natively), English</td>
                </tr>
                <tr>
                  <td width="45">
                    <svg class="icon" viewBox="0 0 24 24">
                      <path d="M12,6C13.11,6 14,5.1 14,4C14,3.62 13.9,3.27 13.71,2.97L12,0L10.29,2.97C10.1,3.27 10,3.62 10,4A2,2 0 0,0 12,6M16.6,16L15.53,14.92L14.45,16C13.15,17.29 10.87,17.3 9.56,16L8.5,14.92L7.4,16C6.75,16.64 5.88,17 4.96,17C4.23,17 3.56,16.77 3,16.39V21A1,1 0 0,0 4,22H20A1,1 0 0,0 21,21V16.39C20.44,16.77 19.77,17 19.04,17C18.12,17 17.25,16.64 16.6,16M18,9H13V7H11V9H6A3,3 0 0,0 3,12V13.54C3,14.62 3.88,15.5 4.96,15.5C5.5,15.5 6,15.3 6.34,14.93L8.5,12.8L10.61,14.93C11.35,15.67 12.64,15.67 13.38,14.93L15.5,12.8L17.65,14.93C18,15.3 18.5,15.5 19.03,15.5C20.11,15.5 21,14.62 21,13.54V12A3,3 0 0,0 18,9Z" />
                    </svg>
                  </td>
                  <td>July 29th 1977</td>
                </tr>
              </table>
            </div>
          </div>

          <div class="row mt-5" style="page-break-before: always;">
            <div class="col">
              <h1 class="display-4">Projects</h1>
            </div>
          </div>

          <div class="row my-4">
            <div class="col">
              <p class="text-justify">
                  Quisque neque sem, laoreet pulvinar velit a, hendrerit venenatis est. Nullam vitae sodales erat. Nullam sollicitudin quam sit amet nibh pretium placerat.
              </p>
            </div>
          </div>

<?php
foreach ($projects as $index => $item) {
?>

                <div class="row my-4">
                  <div class="col-6">
                    <div class="card shadow">
                      <img src="{{ $item['img'] }}" class="img-fluid">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="h4">{{ $item['title'] }}</div>
                    <p>{{ $item['description'] }}</p>
<?php
if (isset($item['tags']) && is_array($item['tags'])) {
  echo '<div>';
  foreach ($item['tags'] as $tag) {
    echo '<span class="badge badge-secondary">' . $tag . '</span> ';
  }
  echo '</div>';
}
?>
                  </div>
                </div>
<?php 
}
?>
        </div>
      </div>
    </div>
  </body>
</html>