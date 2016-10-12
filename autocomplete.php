<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php'; ?>
    <!-- Angular APP -->
    <?php include 'components/ng-head.php'; ?>
</head>
<body ng-app="app">
    <header>
        <?php include 'components/navbar.php'; ?>
        <section class="light-bg pt2 pb2 cover relative" style="background-image: url(design/images/header.jpg);">
          <div class="container wide">
            <div class="row">
              <div class="col-md-6">
                <h1 class="white">IM Autocomplete</h1>
              </div>
              <div class="col-md-6">
                <ul class="breadcrumbs white lh1 right-md">
                  <li><a href="http://mycode.in.ua/">MyCode</a></li>
                  <li><a href="http://mycode.in.ua/framework/">Framework</a></li>
                  <li>IM Autocomplete</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="floating-button">
            <a href="#" class="btn-fl pink-bg hover-bg-darken ripple" title="Propose additions"><i class="mti">add</i></a>
          </div>
        </section>
    </header>
    <main ng-controller="mainController">

      <section>
        <div class="container pt2 pb2">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb1">Single select + custom variant</h2>
              <div class="form-group">
                <label for="">Country</label>
                <im-autocomplete-single
                  value='{"value": "UA", "text": "Ukraine"}'
                  name="country_code"
                  output="single_country"
                  url="app/data/autocomplete.php"
                  min-length="1"
                  placeholder="Type name"
                ></im-autocomplete-single>
                <div class="mt2">
                  <pre>{{single_country|json}}</pre>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="mb1">Multiple select + custom variant</h2>
              <div class="form-group">
                <label for="">Countries</label>
                <im-autocomplete-multiple
                  value='[{"value": "UA", "text": "Ukraine"}, {"value": "RU", "text": "Russia"}]'
                  name="country_code"
                  output="multiple_countries"
                  url="app/data/autocomplete.php"
                  min-length="1"
                  placeholder="Type via comma"
                  class="default"
                ></im-autocomplete-multiple>
              </div>
              <div class="mt2">
                <pre>{{multiple_countries|json}}</pre>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section>
        <div class="container pt2 pb2">
          <div class="row">
            <div class="col-md-6">
              <h2 class="mb1">Single select on focus</h2>
              <div class="form-group">
                <label for="">Country</label>
                <im-autocomplete-single
                  value=''
                  name="country_code"
                  output="single_country_onfocus"
                  url="app/data/autocomplete.php"
                  min-length="0"
                  placeholder="Type name"
                ></im-autocomplete-single>
                <div class="mt2">
                  <pre>{{single_country_onfocus|json}}</pre>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <h2 class="mb1">Multiple select on focus</h2>
              <div class="form-group">
                <label for="">Countries</label>
                <im-autocomplete-multiple
                  value=''
                  name="country_code"
                  output="multiple_countries_onfocus"
                  url="app/data/autocomplete.php"
                  min-length="0"
                  placeholder="Type via comma"
                ></im-autocomplete-multiple>
              </div>
              <div class="mt2">
                <pre>{{multiple_countries_onfocus|json}}</pre>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>

    <footer>
    </footer>
</body>
</html>