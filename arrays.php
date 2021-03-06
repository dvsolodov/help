<?php

$rusBigrams = [
    'ст', 'то', 'но', 'на', 'по', 'ен', 'ни', 'ко', 'ра', 'ов', 'не', 'ро', 'пр', 'ал', 'го', 'ре', 'ос', 'ли',
    'ка', 'во', 'ер', 'та', 'от', 'ва', 'ор', 'ол', 'ет', 'те', 'ом', 'ан', 'ел', 'од', 'ть', 'ла', 'он', 'ле',
    'ло', 'ес', 'ат', 'ри', 'ль', 'де', 'ог', 'ве', 'ны', 'ти', 'за', 'ит', 'ск', 'да', 'ак', 'ой', 'ин', 'ме',
    'ем', 'ил', 'че', 'об', 'ас', 'до', 'мо', 'ки', 'тр', 'ся', 'ед', 'со', 'ми', 'нн', 'се', 'ам', 'ис', 'ав',
    'же', 'аз', 'ма', 'им', 'тв', 'ар', 'ви', 'ие', 'ру', 'бо', 'сл', 'из', 'вы', 'ди', 'бы', 'ия', 'ик', 'ег',
    'пе', 'ив', 'чт', 'вс', 'ей', 'сь', 'ок', 'ьн', 'ое', 'ну', 'си', 'их', 'эт', 'хо', 'ад', 'ча', 'ож', 'ая',
    'сп', 'ля', 'ев', 'ич', 'му', 'чи', 'ше', 'тс', 'дн', 'ку', 'уд', 'ых', 'са', 'ек', 'бе', 'оч', 'ий', 'па',
    'ци', 'кр', 'зн', 'оп', 'ае', 'ду', 'ии', 'ще', 'ту', 'ые', 'ый', 'ир', 'ты', 'оз', 'вн', 'ыл', 'ры', 'ят',
    'ут', 'тн', 'жи', 'нт', 'ус', 'сс', 'ши', 'ид', 'ым', 'ня', 'га', 'св', 'ез', 'лу', 'кт', 'мы', 'мн', 'ее',
    'уж', 'ую', 'вл', 'ул', 'гр', 'пи', 'аж', 'бр', 'аб', 'уч', 'др', 'це', 'аю', 'еч', 'сн', 'ач', 'ги', 'чн',
    'су', 'гл', 'лю', 'жн', 'ах', 'еб', 'бу', 'рн', 'ур', 'ьс', 'ыв', 'щи', 'нь', 'зв', 'пл', 'ап', 'жа', 'гд',
    'ря', 'нс', 'ьк', 'уг', 'бл', 'ои', 'лс', 'жд', 'аш', 'ба', 'би', 'ум', 'иц', 'еп', 'рт', 'зд', 'ют', 'зо',
    'еж', 'вр', 'дл', 'ук', 'уп', 'кл', 'ша', 'еш', 'ош', 'пу', 'см', 'аг', 'дв', 'ву', 'ке', 'тк', 'ац', 'йс',
    'оя', 'ай', 'зи', 'ио', 'ды', 'уб', 'нк', 'ыс', 'ыт', 'иг', 'ех', 'ющ', 'ещ', 'ха', 'нд', 'дс', 'рм', 'ял',
    'ге', 'ян', 'гу', 'ию', 'лы', 'уш', 'рс', 'фи', 'тя', 'ца', 'зы', 'вш', 'ох', 'иш', 'зм', 'фо', 'ьш', 'иа',
    'нц', 'кс', 'ям', 'шк', 'ув', 'рь', 'зу', 'рг', 'иб', 'рв', 'яд', 'ср', 'зе', 'чу', 'шл', 'фе', 'мя', 'яв',
    'ун', 'шь', 'лн', 'ью', 'рк', 'ье', 'чк', 'дь', 'ущ', 'ща', 'ыш', 'оо', 'ео', 'ух', 'бя', 'вк', 'сы', 'яс',
    'вт', 'йн', 'зр', 'ец', 'юд', 'яз', 'бн', 'лк', 'бщ', 'уз', 'рж', 'вя', 'мп', 'кн', 'лл', 'дя', 'уе', 'кв',
    'сч', 'шн', 'вз', 'юб', 'оц', 'иж', 'ип', 'яе', 'ья', 'пы', 'ащ', 'дк', 'рд', 'лж', 'оф', 'аи', 'хи', 'ящ',
    'ях', 'хн', 'ощ', 'зл', 'фа', 'ыр', 'эк', 'вд', 'шо', 'бс', 'ын', 'зя', 'шу', 'зг', 'тл', 'ьм', 'вп', 'хр',
    'мл', 'ьт', 'йт', 'жу', 'гн', 'еа', 'пя', 'ык', 'рш', 'нг', 'бъ', 'ея', 'мм', 'ою', 'яю', 'ьз', 'ыб', 'цы',
    'ъе', 'кц', 'сх', 'сд', 'ып', 'аф', 'чь', 'як', 'ау', 'юч', 'ищ', 'дп', 'рх', 'нч', 'мс', 'уа', 'фр', 'вь',
    'цо', 'дц', 'ыч', 'йч', 'еф', 'тд', 'зб', 'ху', 'зк', 'лг', 'хв', 'пн', 'иф', 'вм', 'ню', 'дж', 'нф', 'оэ',
    'йд', 'яж', 'пп', 'ыд', 'еи', 'шт', 'жк', 'юс', 'ею', 'мк', 'цу', 'яч', 'юр', 'рб', 'эл', 'дм', 'йк', 'сш',
    'рю', 'сю', 'дт', 'рп', 'щу', 'хл', 'тч', 'яр', 'ъя', 'рр', 'чш', 'ьб', 'ыг', 'бк', 'йш', 'пт', 'мь', 'рч',
    'тм', 'гк', 'зь', 'пк', 'рл', 'еу', 'ьц', 'нщ', 'яг', 'ьг', 'кж', 'пс', 'бх', 'уй', 'сб', 'цк', 'фу', 'мб',
    'ьи', 'пь', 'лч', 'яя', 'сц', 'оу', 'тп', 'цв', 'яц', 'тт', 'эн', 'лт', 'ыз', 'щн', 'хе', 'тю', 'яб', 'дд',
    'зж', 'сф', 'нр', 'яй', 'нв', 'дш', 'вв', 'йо', 'рц', 'юн', 'фл', 'ао', 'жо', 'хс', 'рф', 'дч', 'ьч', 'чо',
    'эр', 'фф', 'вч', 'юз', 'лд', 'сё', 'эф', 'ьд', 'бю', 'бв', 'жб', 'уя', 'тц', 'нз', 'фт', 'вг', 'хм', 'чл',
    'юм', 'дх', 'йм', 'дг', 'тб', 'йц', 'эм', 'эп', 'щь', 'вх', 'ёт', 'юк', 'яп', 'жч', 'оа', 'ыж', 'бм', 'рз',
    'мр', 'эс', 'юл', 'ён', 'йл', 'кк', 'юц', 'вц', 'ыя', 'съ', 'щё', 'чр', 'дз', 'хт', 'кз', 'дъ', 'шв', 'иу',
    'бь', 'ём', 'дб', 'юш', 'чё', 'жь', 'мв', 'юж', 'мч', 'мц', 'мг', 'уц', 'жс', 'лб', 'лп', 'уи', 'юю', 'нж',
    'гч', 'сг', 'ьв', 'её', 'зс', 'пц', 'лё', 'яи', 'ёл', 'яш', 'уф', 'гс', 'аэ', 'фс', 'дю', 'лм', 'юг', 'рщ',
    'вщ', 'ёр', 'эд', 'лз', 'гм', 'гв', 'дё', 'мф', 'зъ', 'шп', 'мэ', 'эв', 'пч', 'км', 'ьф', 'бж', 'тх', 'нш',
    'эй', 'кп', 'уэ', 'гт', 'нб', 'ьо', 'бд', 'шм', 'кг', 'зч', 'шё', 'юх', 'сж', 'бб', 'нё', 'кш', 'зз', 'тщ',
    'фы', 'зц', 'гг', 'лх', 'йе', 'аа', 'тё', 'ьщ', 'ыи', 'тф', 'нх', 'тг', 'рэ', 'лв', 'бш', 'рё', 'вё', 'ьп',
    'лр', 'зт', 'хх', 'йз', 'эз', 'чв', 'шр', 'ыщ', 'оё', 'вб', 'нп', 'кд', 'сэ', 'йб', 'жл', 'тъ', 'жм', 'бз',
    'уо', 'жр', 'сз', 'жг', 'тз', 'жё', 'жж', 'фь', 'йф', 'пш', 'зю', 'иэ', 'эх', 'тэ', 'лш', 'бэ', 'йр', 'хг',
    'бт', 'хш', 'гб', 'мт', 'йг', 'фн', 'нэ', 'тш', 'фг', 'аё',
];

$engBigrams = [
    'th', 'en', 'ng', 'he', 'ed', 'of', 'in', 'to', 'al', 'er', 'it', 'de', 'an', 'ou', 'se', 're', 'ea', 'le',
    'nd', 'hi', 'sa', 'at', 'is', 'si', 'on', 'or', 'ar', 'nt', 'ti', 've', 'ha', 'as', 'ra', 'es', 'te', 'ld',
    'st', 'et', 'ur',
];

$maleNames = [
    'Аарон', 'Аба', 'Аббас', 'Абд аль-Узза', 'Абдуллах', 'Абид', 'Аботур', 'Аввакум', 'Август', 'Авдей', 'Авель',
    'Аверкий', 'Авигдор', 'Авирмэд', 'Авксентий', 'Авл', 'Авнер', 'Аврелий', 'Автандил', 'Автоном', 'Агапит',
    'Агафангел', 'Агафодор', 'Агафон', 'Аги', 'Агриппа', 'Адам', 'Адар', 'Адиль', 'Адольф', 'Адонирам', 'Адриан',
    'Азамат', 'Азарий', 'Азат', 'Азиз', 'Азим', 'Айварс', 'Айдар', 'Айрат', 'Акакий', 'Аквилий', 'Акиф', 'Акоп',
    'Аксель', 'Алан', 'Аланус', 'Алек', 'Александр', 'Алексей', 'Алемдар', 'Алик', 'Алим', 'Алипий', 'Алишер',
    'Алмат', 'Алоиз', 'Алон', 'Альберик', 'Альберт', 'Альбин', 'Альваро', 'Альвиан', 'Альвизе', 'Альфонс', 'Альфред',
    'Амадис', 'Амвросий', 'Амедей', 'Амин', 'Амир', 'Амр', 'Амфилохий', 'Анания', 'Анас', 'Анастасий', 'Анатолий',
    'Ангеляр', 'Андокид', 'Андрей', 'Андроник', 'Аннерс', 'Анри', 'Ансельм', 'Антипа', 'Антон', 'Антоний',
    'Антонин', 'Антуан', 'Арам', 'Арефа', 'Арзуман', 'Аристарх', 'Аристон', 'Ариф', 'Аркадий', 'Арсений', 'Артём',
    'Артур', 'Арфаксад', 'Асаф', 'Атанасий', 'Атом', 'Аттик', 'Афанасий', 'Афинагор', 'Афиней', 'Афиф', 'Африкан',
    'Ахилл', 'Ахмад', 'Ахтям', 'Ашот', 'Бадар', 'Барни', 'Бартоломео', 'Басир', 'Бахтияр', 'Баян', 'Безсон', 'Бен',
    'Беньямин', 'Берт', 'Бехруз', 'Билял', 'Богдан', 'Болеслав', 'Бонавентура', 'Борис', 'Борислав', 'Боян',
    'Бронислав', 'Брячислав', 'Бурхан', 'Бутрос', 'Бямбасурэн', 'Вадим', 'Валентин', 'Валентино', 'Валерий',
    'Валерьян', 'Вальдемар', 'Вангьял', 'Варлам', 'Варнава', 'Варфоломей', 'Василий', 'Вахтанг', 'Велвел', 'Венансио',
    'Венедикт', 'Вениамин', 'Венцеслав', 'Вигго', 'Викентий', 'Виктор', 'Викторин', 'Вильгельм', 'Винцас', 'Виссарион',
    'Виталий', 'Витаутас', 'Вито', 'Владимир', 'Владислав', 'Владлен', 'Влас', 'Воислав', 'Володарь', 'Вольфганг',
    'Вописк', 'Всеволод', 'Всеслав', 'Вук', 'Вукол', 'Вышеслав', 'Вячеслав', 'Габриеле', 'Гавриил', 'Гай', 'Галактион',
    'Галымжан', 'Гамлет', 'Гаспар', 'Гафур', 'Гвидо', 'Гейдар', 'Геласий', 'Гелий', 'Гельмут', 'Геннадий', 'Генри',
    'Генрих', 'Георге', 'Георгий', 'Гераклид', 'Герасим', 'Герберт', 'Герман', 'Германн', 'Геронтий', 'Герхард',
    'Гийом', 'Гильем', 'Гинкмар', 'Глеб', 'Гней', 'Гоар', 'Горацио', 'Гордей', 'Градислав', 'Григорий', 'Гримоальд',
    'Гуго', 'Гурий', 'Густав', 'Гьялцен', 'Давид', 'Дамдинсурэн', 'Дамир', 'Даниил', 'Дарий', 'Демид', 'Демьян',
    'Денеш', 'Денис', 'Децим', 'Джаббар', 'Джамиль', 'Джан', 'Джанер', 'Джанфранко', 'Джафар', 'Джейкоб', 'Джихангир',
    'Джованни', 'Джон', 'Джохар', 'Джулиано', 'Джулиус', 'Дино', 'Диодор', 'Дитер', 'Дитмар', 'Дитрих', 'Дмитрий',
    'Доминик', 'Дональд', 'Донат', 'Дорофей', 'Досифей', 'Евгений', 'Евграф', 'Евдоким', 'Еврит', 'Евсей', 'Евстафий',
    'Евтихан', 'Евтихий', 'Егор', 'Елеазар', 'Елисей', 'Емельян', 'Епифаний', 'Ербол', 'Ерванд', 'Еремей', 'Ермак',
    'Ермолай', 'Ерофей', 'Ефим', 'Ефрем', 'Жан', 'Ждан', 'Жером', 'Жоан', 'Захар', 'Захария', 'Збигнев', 'Зденек',
    'Зейналабдин', 'Зенон', 'Зеэв', 'Зигмунд', 'Зинон', 'Зия', 'Золтан', 'Зосима', 'Иакинф', 'Иан', 'Ибрагим', 'Ибрахим',
    'Иван', 'Игнатий', 'Игорь', 'Иероним', 'Иерофей', 'Израиль', 'Икрима', 'Иларий', 'Илия', 'Илларион', 'Илмари',
    'Ильфат', 'Илья', 'Имран', 'Иннокентий', 'Иоаким', 'Иоанн', 'Иоанникий', 'Иоахим', 'Иов', 'Иоганн', 'Иоганнес',
    'Ионафан', 'Иосафат', 'Ираклий', 'Иржи', 'Иринарх', 'Ириней', 'Иродион', 'Иса', 'Исаак', 'Исаакий', 'Исаия',
    'Исидор', 'Ислам', 'Исмаил', 'Истислав', 'Истома', 'Истукарий', 'Иштван', 'Йюрген', 'Кадваллон', 'Кадир', 'Казимир',
    'Каликст', 'Калин', 'Каллистрат', 'Кальман', 'Канат', 'Карен', 'Карлос', 'Карп', 'Картерий', 'Кассиан', 'Кассий',
    'Касторий', 'Касьян', 'Катберт', 'Квинт', 'Кехлер', 'Киллиан', 'Ким', 'Кир', 'Кириак', 'Кирилл', 'Клаас', 'Клавдиан',
    'Клеоник', 'Климент', 'Кондрат', 'Конон', 'Конрад', 'Константин', 'Корнелиус', 'Корнилий', 'Коррадо', 'Косьма',
    'Кратет', 'Кратипп', 'Крис', 'Криспин', 'Кристиан', 'Кронид', 'Кузьма', 'Куприян', 'Курбан', 'Курт', 'Кутлуг-Буга',
    'Кэлин', 'Лаврентий', 'Лавс', 'Ладислав', 'Лазарь', 'Лайл', 'Лампрехт', 'Ландульф', 'Лев', 'Леви', 'Ленни', 'Леонид',
    'Леонтий', 'Леонхард', 'Лиам', 'Линкей', 'Логгин', 'Лоренц', 'Лоренцо', 'Луи', 'Луитпольд', 'Лука', 'Лукас', 'Лукий',
    'Лукьян', 'Луций', 'Людовик', 'Люцифер', 'Макар', 'Максим', 'Максимиан', 'Максимилиан', 'Малик', 'Малх', 'Мамбет',
    'Маний', 'Мануил', 'Мануэль', 'Мариан', 'Мариус', 'Марк', 'Маркел', 'Мартын', 'Марчелло', 'Матвей', 'Матео',
    'Матиас', 'Матфей', 'Матфий', 'Махмуд', 'Меир', 'Мелентий', 'Мелитон', 'Менахем-Мендель', 'Месроп', 'Мефодий',
    'Мечислав', 'Мика', 'Микеланджело', 'Микулаш', 'Милорад', 'Мина', 'Мирко', 'Мирон', 'Мирослав', 'Митрофан',
    'Михаил', 'Михей', 'Младан', 'Модест', 'Моисей', 'Мордехай', 'Мстислав', 'Мурад', 'Мухаммед', 'Мэдисон',
    'Мэлор', 'Мэлс', 'Назар', 'Наиль', 'Насиф', 'Натан', 'Натаниэль', 'Наум', 'Нафанаил', 'Нацагдорж', 'Нестор',
    'Никандр', 'Никанор', 'Никита', 'Никифор', 'Никодим', 'Николай', 'Нил', 'Нильс', 'Ноа', 'Ной', 'Норд', 'Нуржан',
    'Нурлан', 'Овадья', 'Оге', 'Одинец', 'Октав', 'Октавиан', 'Октавий', 'Октавио', 'Олаф', 'Оле', 'Олег', 'Оливер',
    'Ольгерд', 'Онисим', 'Орест', 'Осип', 'Оскар', 'Осман', 'Отто', 'Оттон', 'Очирбат', 'Пабло', 'Павел', 'Павлин',
    'Павсикакий', 'Паисий', 'Палладий', 'Панкратий', 'Пантелеймон', 'Папа', 'Паруйр', 'Парфений', 'Патрик', 'Пафнутий',
    'Пахомий', 'Педро', 'Пётр', 'Пимен', 'Пинхас', 'Пипин', 'Питирим', 'Пол', 'Полидор', 'Полиевкт', 'Поликарп',
    'Поликрат', 'Порфирий', 'Потап', 'Предраг', 'Премысл', 'Приск', 'Прокл', 'Прокопий', 'Прокул', 'Протасий', 'Прохор',
    'Публий', 'Рагнар', 'Рагуил', 'Радмир', 'Радослав', 'Разумник', 'Раймонд', 'Рамадан', 'Рамазан', 'Рахман', 'Рашад',
    'Рейнхард', 'Ренат', 'Реститут', 'Ричард', 'Роберт', 'Родерик', 'Родион', 'Рожер', 'Розарио', 'Роман', 'Ромен',
    'Рон', 'Ронан', 'Ростислав', 'Рудольф', 'Руслан', 'Руф', 'Руфин', 'Рушан', 'Сабит', 'Савва', 'Савватий', 'Савелий',
    'Савин', 'Саддам', 'Садик', 'Саид', 'Салават', 'Салих', 'Саллюстий', 'Салман', 'Самуил', 'Сармат', 'Святослав',
    'Севастьян', 'Северин', 'Секст', 'Секунд', 'Семён', 'Септимий', 'Серапион', 'Сергей', 'Серж', 'Сигеберт', 'Сильвестр',
    'Симеон', 'Симон', 'Созон', 'Соломон', 'Сонам', 'Софрон', 'Спиридон', 'Срджан', 'Станислав', 'Степан', 'Стефано',
    'Стивен', 'Таврион', 'Тавус', 'Тадеуш', 'Тарас', 'Тарасий', 'Тейс', 'Тендзин', 'Теофил', 'Терентий', 'Терри',
    'Тиберий', 'Тигран', 'Тимофей', 'Тимур', 'Тихомир', 'Тихон', 'Томас', 'Томоми', 'Торос', 'Тофик', 'Трифон',
    'Трофим', 'Тудхалия', 'Тутмос', 'Тьерри', 'Тьяго', 'Уве', 'Уильям', 'Улдис', 'Ульрих', 'Ульф', 'Умар', 'Урызмаг',
    'Усама', 'Усман', 'Фавст', 'Фаддей', 'Файзулла', 'Фарид', 'Фахраддин', 'Федериго', 'Федосей', 'Федот', 'Фейсал',
    'Феликс', 'Феоктист', 'Феофан', 'Феофил', 'Феофилакт', 'Фердинанд', 'Ференц', 'Фёдор', 'Фидель', 'Филарет',
    'Филат', 'Филип', 'Филипп', 'Философ', 'Филострат', 'Фирс', 'Фока', 'Фома', 'Фотий', 'Франц', 'Франческо', 'Фредерик',
    'Фридрих', 'Фродо', 'Фрол', 'Фульк', 'Хайме', 'Ханс', 'Харальд', 'Харитон', 'Харри', 'Харрисон', 'Хасан', 'Хетаг',
    'Хильдерик', 'Хирам', 'Хлодвиг', 'Хокон', 'Хорив', 'Хоселито', 'Хосрой', 'Хрисанф', 'Христофор', 'Хуан', 'Цэрэндорж',
    'Чеслав', 'Шалом', 'Шамиль', 'Шамсуддин', 'Шапур', 'Шарль', 'Шейх-Хайдар', 'Шон', 'Эберхард', 'Эдмунд', 'Эдна',
    'Эдуард', 'Элбэгдорж', 'Элджернон', 'Элиас', 'Эллиот', 'Эмиль', 'Энрик', 'Энрико', 'Энтони', 'Эразм', 'Эраст',
    'Эрик', 'Эрнст', 'Эсекьель', 'Эстебан', 'Этьен', 'Ювеналий', 'Юлиан', 'Юлий', 'Юлиус', 'Юрий', 'Юстас', 'Юстин',
    'Яков', 'Якуб', 'Якун', 'Ян', 'Яни', 'Януарий', 'Яромир', 'Ярополк', 'Ярослав',
];

$femaleNames = [
    'Августа', 'Августина', 'Авдотья', 'Аврелия', 'Аврея', 'Аврора', 'Агапа', 'Агапия', 'Агарь', 'Агата', 'Агафа',
    'Агафия', 'Агафоклия', 'Агафоника', 'Агафья', 'Агита', 'Аглаида', 'Аглая', 'Агна', 'Агнесса', 'Агния', 'Аграфена',
    'Агриппина', 'Ада', 'Аделаида', 'Аделина', 'Аделия', 'Аделла', 'Адель', 'Адельфина', 'Адиля', 'Адина', 'Адолия',
    'Адриана', 'Аза', 'Азалия', 'Азелла', 'Азиза', 'Аида', 'Айжан', 'Айта', 'Акгюль', 'Акилина', 'Аксиния', 'Аксинья',
    'Акулина', 'Алана', 'Алевтина', 'Александра', 'Александрина', 'Алексина', 'Алена', 'Алеся', 'Алешан', 'Алёна',
    'Алико', 'Алина', 'Алиса', 'Алла', 'Алсу', 'Алфея', 'Альберта', 'Альбертина', 'Альбина', 'Альвина', 'Альжбета',
    'Альфия', 'Альфреа', 'Альфреда', 'Амалия', 'Амата', 'Амелия', 'Амелфа', 'Амина', 'Анабела', 'Анастасия', 'Анатолия',
    'Ангела', 'Ангелика', 'Ангелина', 'Анджела', 'Андрея', 'Андрона', 'Андроника', 'Анжела', 'Анжелика', 'Анисия',
    'Анисья', 'Анита', 'Анна', 'Антигона', 'Антониана', 'Антонида', 'Антонина', 'Антония', 'Ануш', 'Анфима', 'Анфиса',
    'Анфия', 'Анфуса', 'Анэля', 'Аполлинария', 'Аполлония', 'Апраксин', 'Апрелия', 'Апфия', 'Арабелла', 'Аргентея',
    'Ариадна', 'Арина', 'Ария', 'Арлета', 'Арминия', 'Арсения', 'Артемида', 'Артемия', 'Архелия', 'Асия', 'Аста',
    'Астра', 'Ася', 'Аурелия', 'Афанасия', 'Аэлита', 'Бабетта', 'Багдагуль', 'Барбара', 'Беата', 'Беатриса', 'Белла',
    'Бенедикта', 'Береслава', 'Бернадетта', 'Берта', 'Бибиана', 'Биргит', 'Бирута', 'Бландина', 'Бланка', 'Богдана',
    'Божена', 'Болеслава', 'Борислава', 'Ботогоз', 'Бояна', 'Бригитта', 'Бронислава', 'Бруна', 'Валенсия', 'Валентина',
    'Валерия', 'Валида', 'Валия', 'Ванда', 'Варвара', 'Варя', 'Васёна', 'Васила', 'Василида', 'Василина', 'Василиса',
    'Василия', 'Василла', 'Васса', 'Вацлава', 'Вевея', 'Веджиха', 'Велимира', 'Велислава', 'Венедикта', 'Венера',
    'Венуста', 'Венцеслава', 'Вера', 'Вербния', 'Вереника', 'Вероника', 'Веселина', 'Веста', 'Вестита', 'Вета',
    'Вива', 'Вивея', 'Вивиана', 'Вида', 'Видина', 'Викентия', 'Виктбрия', 'Викторина', 'Виктория', 'Вила', 'Вилена',
    'Виленина', 'Вилора', 'Вильгельмина', 'Виолетта', 'Виргиния', 'Виринея', 'Вита', 'Виталика', 'Виталина', 'Виталия',
    'Витольда', 'Влада', 'Владилена', 'Владимира', 'Владислава', 'Владлена', 'Воислава', 'Воля', 'Всеслава', 'Габриэлла',
    'Гаджимет', 'Газама', 'Гала', 'Галата', 'Галатея', 'Гали', 'Галима', 'Галина', 'Галла', 'Галя', 'Гая', 'Гаянэ',
    'Геласия', 'Гелена', 'Гелла', 'Гемелла', 'Гемина', 'Гения', 'Геннадия', 'Геновефа', 'Генриетта', 'Георгина',
    'Гера', 'Германа', 'Гертруда', 'Гея', 'Гизелла', 'Глафира', 'Гликерия', 'Глорибза', 'Глория', 'Голиндуха', 'Гольпира',
    'Гонеста', 'Гонората', 'Горгония', 'Горислава', 'Гортензия', 'Градислава', 'Гражина', 'Грета', 'Гулара', 'Гульмира',
    'Гульназ', 'Гульнара', 'Гюзель', 'Дайна', 'Далила', 'Далия', 'Дамира', 'Дана', 'Даная', 'Даниэла', 'Данута',
    'Дариа', 'Дарина', 'Дария', 'Дарья', 'Дастагуль', 'Дебора', 'Деена', 'Декабрена', 'Денесия', 'Денница', 'Дея',
    'Джамиля', 'Джана', 'Джафара', 'Джемма', 'Джулия', 'Джульетта', 'Диана', 'Дигна', 'Диля', 'Диляра', 'Дина',
    'Динара', 'Диодора', 'Дионина', 'Дионисия', 'Дия', 'Доброгнева', 'Добромила', 'Добромира', 'Доброслава', 'Доля',
    'Доминика', 'Домитилла', 'Домна', 'Домника', 'Домникия', 'Домнина', 'Донара', 'Доната', 'Дора', 'Доротея', 'Дорофея',
    'Доса', 'Досифея', 'Дросида', 'Дуклида', 'Ева', 'Евангелина', 'Еванфия', 'Евгения', 'Евдокия', 'Евдоксия', 'Евлалия',
    'Евлампия', 'Евмения', 'Евминия', 'Евника', 'Евникия', 'Евномия', 'Евпраксия', 'Евсевия', 'Евстафия', 'Евстолия',
    'Евтихия', 'Евтропия', 'Евфалия', 'Евфимия', 'Евфросиния', 'Екатерина', 'Елена', 'Елизавета', 'Еликонида', 'Епистима',
    'Епистимия', 'Ермиония', 'Есения', 'Ефимия', 'Ефимья', 'Ефросиния', 'Ефросинья', 'Жанна', 'Жеральдина', 'Жозефина',
    'Забава', 'Заира', 'Замира', 'Зара', 'Зарема', 'Зари', 'Зарина', 'Зарифа', 'Звезда', 'Земфира', 'Зенона', 'Зина',
    'Зинаида', 'Зинат', 'Зиновия', 'Зита', 'Злата', 'Зоя', 'Зульфия', 'Зураб', 'Зухра', 'Ива', 'Иванна', 'Иветта',
    'Ивона', 'Ида', 'Идея', 'Изабелла', 'Изида', 'Изольда', 'Илария', 'Илзе', 'Илия', 'Илона', 'Ильина', 'Ильмира',
    'Инара', 'Инга', 'Инесса', 'Инна', 'Иоанна', 'Иовилла', 'Иола', 'Иоланта', 'Ипполита', 'Ирада', 'Ираида', 'Ирена',
    'Ирина', 'Ирма', 'Исидора', 'Ифигения', 'Июлия', 'Ия', 'Каздоя', 'Казимира', 'Калерия', 'Калида', 'Калиса',
    'Каллиникия', 'Каллиста', 'Каллисфения', 'Кама', 'Камила', 'Камилла', 'Кандида', 'Капитолина', 'Карима', 'Карина',
    'Каролина', 'Касиния', 'Катарина', 'Келестина', 'Керкира', 'Кетевань', 'Кикилия', 'Кима', 'Кира', 'Кириакия',
    'Кириана', 'Кирилла', 'Кирьяна', 'Клавдия', 'Клара', 'Клариса', 'Клементина', 'Клена', 'Клеопатра', 'Климентина',
    'Клотильда', 'Конкордия', 'Констанция', 'Консуэлла', 'Кора', 'Корнелия', 'Кристина', 'Ксаверта', 'Ксанфиппа',
    'Ксения', 'Купава', 'Лавиния', 'Лавра', 'Лада', 'Лайма', 'Лариса', 'Латафат', 'Лаура', 'Лебния', 'Леда', 'Лейла',
    'Лемира', 'Ленина', 'Леокадия', 'Леонида', 'Леонила', 'Леонина', 'Леонтина', 'Леся', 'Летиция', 'Лея', 'Лиана',
    'Ливия', 'Лидия', 'Лилиана', 'Лилия', 'Лина', 'Линда', 'Лира', 'Лия', 'Лола', 'Лолита', 'Лонгина', 'Лора', 'Лота',
    'Луиза', 'Лукерья', 'Лукиана', 'Лукия', 'Лукреция', 'Любава', 'Любовь', 'Любомила', 'Любомира', 'Людмила', 'Люсьена',
    'Люцина', 'Люция', 'Мавра', 'Магда', 'Магдалена', 'Магдалина', 'Магна', 'Мадина', 'Мадлена', 'Маина', 'Майда',
    'Майя', 'Макрина', 'Максима', 'Малания', 'Малика', 'Малина', 'Малинья', 'Мальвина', 'Мамелфа', 'Манана', 'Манефа',
    'Мануэла', 'Маргарита', 'Мариам', 'Мариамна', 'Мариана', 'Марианна', 'Мариетта', 'Марина', 'Маринэ', 'Марионелла',
    'Марионилла', 'Марица', 'Мариэтта', 'Мария', 'Марка', 'Маркеллина', 'Маркиана', 'Марксина', 'Марлена', 'Марселина',
    'Марта', 'Мартина', 'Мартиниана', 'Марфа', 'Марьина', 'Марья', 'Марьям', 'Марьяна', 'Мастридия', 'Матильда',
    'Матрёна', 'Матрона', 'Мая', 'Медея', 'Мелания', 'Меланья', 'Мелитика', 'Меркурия', 'Мерона', 'Милана', 'Милена',
    'Милица', 'Милия', 'Милослава', 'Милютина', 'Мина', 'Минна', 'Минодора', 'Мира', 'Мирдза', 'Миропия', 'Мирослава',
    'Мирра', 'Митродора', 'Михайлина', 'Михалина', 'Млада', 'Модеста', 'Моика', 'Моника', 'Мстислава', 'Муза', 'Мэрилант',
    'Нада', 'Надежда', 'Назира', 'Наиля', 'Наина', 'Нана', 'Наркисса', 'Настасия', 'Настасья', 'Наталия', 'Наталья',
    'Нателла', 'Нелли', 'Ненила', 'Неонила', 'Нида', 'Ника', 'Нила', 'Нимфа', 'Нимфодора', 'Нина', 'Нинель', 'Новелла',
    'Нонна', 'Нора', 'Норгул', 'Ноэми', 'Ноябрина', 'Нунехия', 'Одетта', 'Оксана', 'Октавия', 'Октябрина', 'Олдама',
    'Олеся', 'Оливия', 'Олимпиада', 'Олимпиодора', 'Олимпия', 'Ольвия', 'Ольга', 'Ольда', 'Офелия', 'Павла', 'Павлина',
    'Паисия', 'Паллада', 'Паллидия', 'Пальмира', 'Памела', 'Параскева', 'Патрикия', 'Патриция', 'Паула', 'Паулина',
    'Пелагея', 'Перегрина', 'Перпетуя', 'Петра', 'Петрина', 'Петронилла', 'Петрония', 'Пиама', 'Пинна', 'Плакида',
    'Плакилла', 'Платонида', 'Победа', 'Полактия', 'Поликсена', 'Поликсения', 'Полина', 'Поплия', 'Правдина', 'Прасковья',
    'Препедигна', 'Прискилла', 'Просдока', 'Пульхерия', 'Пульхерья', 'Рада', 'Радана', 'Радислава', 'Радмила', 'Радомира',
    'Радосвета', 'Радослава', 'Радость', 'Раиса', 'Рафаила', 'Рахиль', 'Рашам', 'Ревекка', 'Ревмира', 'Регина',
    'Резета', 'Рема', 'Рената', 'Римма', 'Рипсимия', 'Роберта', 'Рогнеда', 'Роза', 'Розалина', 'Розалинда', 'Розалия',
    'Розамунда', 'Розина', 'Розмари', 'Роксана', 'Романа', 'Ростислава', 'Ружена', 'Рузана', 'Румия', 'Русана',
    'Русина', 'Руслана', 'Руфина', 'Руфиниана', 'Руфь', 'Сабина', 'Савватия', 'Савелла', 'Савина', 'Саида', 'Саломея',
    'Салтанат', 'Самона', 'Сания', 'Санта', 'Сарра', 'Сатира', 'Светислава', 'Светлана', 'Светозара', 'Святослава',
    'Севастьяна', 'Северина', 'Секлетея', 'Секлетинья', 'Селена', 'Селестина', 'Селина', 'Серафима', 'Сибилла',
    'Сильва', 'Сильвана', 'Сильвестра', 'Сильвия', 'Сима', 'Симона', 'Синклитикия', 'Сиотвия', 'Сира', 'Слава',
    'Снандулия', 'Снежана', 'Созия', 'Сола', 'Соломонида', 'Сосипатра', 'София', 'Софрония', 'Софья', 'Сталина',
    'Станислава', 'Стелла', 'Степанида', 'Стефанида', 'Стефания', 'Сусанна', 'Суфия', 'Сюзанна', 'Тавифа', 'Таира',
    'Таисия', 'Таисья', 'Тала', 'Тамара', 'Тарасия', 'Татьяна', 'Тахмина', 'Текуса', 'Теодора', 'Тереза', 'Тигрия',
    'Тина', 'Тихомира', 'Тихослава', 'Тома', 'Томила', 'Транквиллина', 'Трифена', 'Трофима', 'Улдуза', 'Улита',
    'Ульяна', 'Урбана', 'Урсула', 'Устина', 'Устиния', 'Устинья', 'Фабиана', 'Фавста', 'Фавстина', 'Фаиза', 'Фаина',
    'Фанни', 'Фантика', 'Фаня', 'Фарида', 'Фатима', 'Фая', 'Фебния', 'Феврония', 'Февронья', 'Федоза', 'Федора',
    'Федосия', 'Федосья', 'Федотия', 'Федотья', 'Федула', 'Фекла', 'Фекуса', 'Феликса', 'Фелица', 'Фелицата', 'Фелициана',
    'Фелицитата', 'Фелиция', 'Феогния', 'Феодора', 'Феодосия', 'Феодота', 'Феодотия', 'Феодула', 'Феодулия', 'Феозва',
    'Феоктиста', 'Феона', 'Феонилла', 'Феопистия', 'Феосовия', 'Феофания', 'Феофила', 'Фервуфа', 'Феруза', 'Фессалоника',
    'Фессалоникия', 'Фетиния', 'Фетинья', 'Фея', 'Фёкла', 'Фива', 'Фивея', 'Филарета', 'Филиппа', 'Филиппин', 'Филиппина',
    'Филомена', 'Филонилла', 'Филофея', 'Фиста', 'Флавия', 'Флёна', 'Флора', 'Флорентина', 'Флоренция', 'Флориана',
    'Флорида', 'Фомаида', 'Фортуната', 'Фотина', 'Фотиния', 'Фотинья', 'Франсуаза', 'Франциска', 'Франческа', 'Фредерика',
    'Фрида', 'Фридерика', 'Хаврония', 'Халима', 'Хариесса', 'Хариса', 'Харита', 'Харитина', 'Хильда', 'Хильдегарда',
    'Хиония', 'Хриса', 'Хрисия', 'Христиана', 'Христина', 'Христя', 'Цвета', 'Цветана', 'Целестина', 'Цецилия',
    'Чеслава', 'Чулпан', 'Шангуль', 'Шарлотта', 'Ширин', 'Шушаника', 'Эвелина', 'Эгина', 'Эдда', 'Эдит', 'Эдита',
    'Элахе', 'Элеонора', 'Элиана', 'Элиза', 'Элизабет', 'Элина', 'Элисса', 'Элла', 'Эллада', 'Эллина', 'Элоиза',
    'Эльвира', 'Эльга', 'Эльза', 'Эльмира', 'Эмилиана', 'Эмилия', 'Эмма', 'Эннафа', 'Эра', 'Эрика', 'Эрнеста', 'Эрнестина',
    'Эсмеральда', 'Эстер', 'Эсфирь', 'Юдита', 'Юдифь', 'Юзефа', 'Юлдуз', 'Юлиана', 'Юлиания', 'Юлия', 'Юна', 'Юния',
    'Юнона', 'Юрия', 'Юстина', 'Юханна', 'Ядвига', 'Яна', 'Янина', 'Янита', 'Янка', 'Янсылу', 'Ярослава',
];

$rusChars = [
    'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у',
    'ф', 'х', 'ц', 'ч', 'ъ', 'ы', 'ь', 'э', 'ю', 'я',
];

$engChars = [
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't',
    'u', 'v', 'w', 'z', 'x',
];

$digitChars = [
    '1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
];

$keyBoardChars = [
    '!', '?', '.', ':', ';', '#', '"', "'", '+', '-', '_', '[', ']', '(', ')', '&', '%', '@', '$', '~', '<', '>',
    ',', '/', '\\', '|', '`', '*', '^', '№', ' ',
];
