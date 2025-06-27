# FastBracketChecker

🚀 **FastBracketChecker** — ultra-fast PHP library to validate curly braces `{}` correctness in strings, designed as an alternative to standard stack algorithms.

🚀 **FastBracketChecker** — сверхбыстрая PHP-библиотека для проверки корректности расстановки фигурных скобок `{}` в строках, разработанная как альтернатива стандартным стековым алгоритмам.

---

## 📄 Technical Specification / Техническое задание  
The technical task was taken from here: [link](./TS.md)  
ТЗ было взято отсюда: [ссылка](./TS.md)

---

## 🔥 Features / Особенности

- **~15000x faster** than standard stack implementations  
- Supports strings of **any length** (tested on 20+ million characters)  
- Minimal memory consumption  
- Clean, easy-to-use API

- **В ~15000x быстрее** стандартных стековых реализаций  
- Поддержка строк **любой длины** (проверено на 20+ млн символов)  
- Минимальное потребление памяти  
- Чистый, удобный API

---

## ⚡️ Benchmark / Производительность

| Length / Длина строки      | FastBracketChecker      | StandardBracketChecker  |
|---------------------------|------------------------|------------------------|
| **20 million / 20 млн.**   | ~736ms, ~86 MB         | ~3 hours / ~3 часа     |
| **2 million / 2 млн**      | ~179ms, ~14 MB         | ~50 minutes / ~50 мин  |
| **100 thousand / 100 тыс.**| ~36ms, ~8 MB           | ~45s, 12 MB / ~45с, 12 MB |

> 📊 Benchmark was performed on PHP 8.1.32 using PHPUnit tests.  
> Results demonstrate stable linear performance of FastBracketChecker with minimal memory usage.

> 📊 Benchmark проведён на PHP 8.1.32 с использованием PHPUnit тестов.  
> Результаты демонстрируют стабильную линейную производительность FastBracketChecker при минимальной нагрузке на память.

---

## 🛠️ Installation / Установка

Via Composer:  
Через Composer:

```bash
composer require comordev/fast-bracket-checker
