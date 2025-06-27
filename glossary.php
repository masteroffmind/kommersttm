<?php include './includes/header.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Толковый словарь</title>
    <style>
        :root {
            --paper-light: #d4c9a8;
            --paper-medium: #e8dfc5;
            --paper-dark: #d4c9a8;
            --ink-dark: #2b2b2b;
            --ink-light: #5a5a5a;
            --accent-brown: #8b5a2b;
            --accent-gold: #d4a373;
        }

        body {
            background: linear-gradient(135deg, var(--paper-light) 0%, var(--paper-medium) 100%);
            background-attachment: fixed;
            font-family: 'Cormorant Garamond', 'Times New Roman', serif;
            color: var(--ink-dark);
            position: relative;
            margin: 0;
            line-height: 1.6;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 50% 50%, rgba(0,0,0,0.03) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(255,255,255,0.2) 0%, transparent 20%);
            background-size: 20px 20px, 100% 100%;
            opacity: 0.4;
            z-index: -1;
        }

        .container {
            max-width: 800px;
            margin-top: 30px;
            background: rgba(255, 255, 255, 0.88);
            padding: 30px;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(139, 90, 43, 0.1);
        }

        h1 {
            color: var(--ink-dark);
            font-family: 'Playfair Display', serif;
            font-weight: 600;
            letter-spacing: -0.5px;
            margin-bottom: 1.2rem;
            text-align: center;
        }

        .lead {
            color: var(--ink-light);
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 2rem;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);
        }

        .term-card {
            border: 1px solid rgba(139, 90, 43, 0.2);
            background: rgba(255, 255, 255, 0.9);
            border-radius: 2px;
            padding: 15px;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .term-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            border-color: rgba(139, 90, 43, 0.4);
        }

        .term-text {
            color: var(--accent-brown);
            cursor: pointer;
            font-weight: 500;
            transition: color 0.3s ease, transform 0.2s ease;
        }

        .term-text:hover {
            color: var(--accent-gold);
            transform: scale(1.05);
            text-decoration: underline;
        }

        .modal-content {
            border-radius: 4px;
            border: 1px solid rgba(139, 90, 43, 0.2);
            background: rgba(255, 255, 255, 0.95);
            animation: fadeIn 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        .modal-header {
            background-color: rgba(67, 54, 39, 0.92);
            color: var(--paper-light);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom: 1px solid var(--accent-gold);
        }

        .modal-title {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }

        .modal-body {
            font-size: 1.1rem;
            line-height: 1.6;
            color: var(--ink-dark);
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.7);
        }

        .modal-footer {
            border-top: 1px solid rgba(139, 90, 43, 0.2);
        }

        .btn-primary {
            background-color: var(--accent-brown);
            border-color: var(--accent-brown);
            color: var(--paper-light);
            letter-spacing: 0.5px;
            font-family: 'Cormorant Garamond', serif;
            padding: 8px 20px;
            border-radius: 2px;
        }

        .btn-primary:hover {
            background-color: #9d6b3b;
            border-color: #9d6b3b;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .close-btn {
            color: var(--paper-light);
            opacity: 0.8;
        }

        .close-btn:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Толковый словарь</h1>
        <p class="lead">Ключевые термины по истории гравюры и дипломатической миссии 1576 года.</p>
        <div id="glossary">
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Белозерское наместничество" data-definition="Административная единица Московского государства, управлявшаяся наместником.">Белозерское наместничество</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Дьяк" data-definition="Чиновник, занимавшийся делопроизводством и переговорами.">Дьяк</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Посольский приказ" data-definition="Учреждение, отвечавшее за внешнюю политику и дипломатию.">Посольский приказ</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Регенсбургский рейхстаг" data-definition="Собрание в Регенсбурге 1576 года по вопросу польской короны.">Регенсбургский рейхстаг</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Белозерские князья" data-definition="Потомки Рюриковичей, сохранившие элитный статус.">Белозерские князья</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Наместничество" data-definition="Система управления регионами через наместников.">Наместничество</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Летучий лист" data-definition="Гравюра с текстом для массового распространения.">Летучий лист</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Статейный список" data-definition="Отчёт о деталях дипломатической миссии.">Статейный список</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Кормление" data-definition="Содержание наместников за счёт населения.">Кормление</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Опашень" data-definition="Одежда с откидными рукавами для знати.">Опашень</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Ферязь" data-definition="Длинный кафтан русской знати.">Ферязь</span>
            </div>
            <div class="term-card">
                <span class="term-text" data-bs-toggle="modal" data-bs-target="#termModal" data-term="Плундры" data-definition="Широкие штаны, модные в Европе XVI века.">Плундры</span>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="termModal" tabindex="-1" aria-labelledby="termModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termModalLabel"></h5>
                    <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const termElements = document.querySelectorAll('.term-text');
            const modalTitle = document.querySelector('#termModalLabel');
            const modalBody = document.querySelector('.modal-body');

            termElements.forEach(element => {
                element.addEventListener('click', () => {
                    const term = element.getAttribute('data-term');
                    const definition = element.getAttribute('data-definition');
                    modalTitle.textContent = term;
                    modalBody.textContent = definition;
                });
            });
        });
    </script>
</body>
</html>
<?php include './includes/footer.php'; ?>