<head>
    <link rel="stylesheet" href="style.css">
    <title>Godiaschev Danila</title>
</head>
<body>
  
<div class="forma" id="form">
<form action="index.php" method="POST">
  <p class="aligncenter">
  </p>
  <label></label>
    ФИО:<br />
    <input name="fio" required placeholder="" />
  </label><br />

  <label>
    Номер телефона:<br />
    <input type="tel" name="phone" required placeholder="Номер телефона" />
  </label><br />

  <label>
    Email:<br />
    <input name="email"
      type="email" required
      placeholder="Введите вашу почту" />
  </label><br />

  <label>
    Дата рождения:<br />
    <input name="birth_date"
      value="" required
      type="date" />
  </label><br />

  Ваш пол:<br />
  <label><input type="radio" checked="checked" required
    name="gender" value="Мужской" />
    Мужской</label>
  <label><input type="radio"
    name="gender" value="Женский" />
    Женский</label>
    <br />    
  <label>
    Список языков (listbox с множественным выбором):
    <br />
    <select name="favorite_languages[]" multiple="multiple" required>
      <option value="Pascal">Pascal</option>
      <option value="С">С</option>
      <option value="С++">С++</option>
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
    Биография:
             <br />
    <textarea name="biography"></textarea>
  </label><br />

  <label>
    <input type="checkbox" name="contract_accepted" required/>
    С контрактом ознакомлен
  </label><br />
 
  <input type="submit" value="Сохранить" />
</form>
</div>






<footer class="footer">
    <div class="container">
       <div class="footer-content">
          <h3>©Danya_Montano</h3>
          
       </div>
       <div class="footer-links">
          <ul>
            <li><a href="https://kubsu.ru/">Главная</a></li>
            <li><a href="https://vk.com/mood_danil">О нас </a></li>     
            
          </ul>
       </div>
    </div>
 </footer>
</body>
