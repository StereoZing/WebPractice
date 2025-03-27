<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <title>Лабороторная работа №4</title>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="styleH.css" />
  </head>

  <body class="fs-120p ff-sans-serif" id="body">

    <main class="mxw-960 container g-0 d-flex flex-column justify-content-center">

      <section class="content order-3 order-sm-3 mt-3 p-3" id="form">
        <h2 class="text-center fw-bold">Форма</h2>

        <form action="./" method="POST">
            <label>
                Имя:<br />
                <input name="name" required />
            </label><br />

            <label>
                Телефон:<br />
                <input type="tel" name="phone" required />
            </label><br />

            <label>
                Email:<br />
                <input type="email" name="email" required />
            </label><br />

            <label>
                Дата рождения:<br />
                <input type="date" name="birthday" />
            </label><br />

            Пол:<br />
            <label>
                <input type="radio" checked="checked" name="пол"
                       value="муж" /> Муж
            </label>
            <label>
                <input type="radio" name="пол" value="жен" /> Жен
            </label><br />

            <label>
                Любимые языки программирования:<br />
                <select name="languages" multiple="multiple">
                    <option value="Pascal">Pascal</option>
                    <option value="C">C</option>
                    <option value="C++">C++</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="PHP">PHP</option>
                    <option value="Python">Python</option>
                    <option value="Java">Java</option>
                    <option value="Haskel">Haskel</option>
                    <option value="Clojure">Clojure</option>
                    <option value="Prolog">Prolog</option>
                    <option value="Scala">Scala</option>
                </select>
            </label><br />

            <label>
                Биография:<br />
                <textarea name="biography"></textarea>
            </label><br />

            <label>
                <input type="checkbox" name="familiarized" required />
                Ознакомлен с контрактом
            </label><br />

            <button type="submit">Сохранить</button>
        </form>
      </section>
    </main>

  </body>

</html>
