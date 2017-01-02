<?php
/***********************************************************************
 * This Source Code Form is subject to the terms of the Mozilla Public *
 * License, v. 2.0. If a copy of the MPL was not distributed with this *
 * file, You can obtain one at http://mozilla.org/MPL/2.0/.            *
 ***********************************************************************/

ini_set('default_charset', 'utf-8');
define('DATETIME', 'Y-m-d g:i A T');
define('DATETIMESIMPLE', 'Y-m-d H:i');
define('DATESIMPLE', 'Y-m-d');

$lang = array(
    'Home'=>'Дома',
    'RiskManagement'=>'Управление Рисками',
    'Reporting'=>'Отчетности',
    'Configure'=>'Настроить',
    'MyProfile'=>'Мой Профиль',
    'Logout'=>'Выход',
    'LogInHere'=>'Войти Здесь',
    'Username'=>'Имя пользователя',
    'Password'=>'Пароль',
    'ForgotYourPassword'=>'Забыли пароль',
    'Login'=>'Логин',
    'Reset'=>'Сброс',
    'Send'=>'Отправить',
    'Update'=>'Обновление',
    'SendPasswordResetEmail'=>'Отправить Сброс Пароля Электронной Почты',
    'PasswordReset'=>'Сброс Пароля',
    'ResetToken'=>'Сброс Маркера',
    'RepeatPassword'=>'Повторите Пароль',
    'Submit'=>'Подать',
    'ProfileDetails'=>'Профиль Детали',
    'LastLogin'=>'Послед',
    'ChangePassword'=>'Смена Пароля',
    'CurrentPassword'=>'Текущий Пароль',
    'NewPassword'=>'Новый Пароль',
    'ConfirmPassword'=>'Подтверждение Пароля',
    'ConfigureRiskFormula'=>'Настроить Формулы Риска',
    'ConfigureReviewSettings'=>'Настроить Параметры Обзора',
    'AddAndRemoveValues'=>'Добавление и удаление значений',
    'UserManagement'=>'Руководство Пользователя',
    'RedefineNamingConventions'=>'Пересмотреть Соглашения Об Именовании',
    'AuditTrail'=>'Аудит',
    'Extras'=>'Приложения',
    'Announcements'=>'Объявления',
    'About'=>'О',
    'Impact'=>'Влияние',
    'Likelihood'=>'Вероятность',
    'MitigationEffort'=>'Усилия По Смягчению Последствий',
    'Change'=>'Изменение',
    'to'=>'чтобы',
    'AddANewUser'=>'Добавить нового пользователя',
    'Type'=>'Тип',
    'FullName'=>'Полное Название',
    'EmailAddress'=>'Адрес электронной почты',
    'Teams'=>'Команду(ы)',
    'ALL'=>'Все',
    'NONE'=>'Никто',
    'UserResponsibilities'=>'Обязанности Пользователя',
    'AbleToSubmitNewRisks'=>'Возможность представлять новые риски',
    'AbleToModifyExistingRisks'=>'Возможность изменять существующие риски',
    'AbleToCloseRisks'=>'Возможность закрывать риски',
    'AbleToPlanMitigations'=>'Возможность планировать способы',
    'AbleToReviewLowRisks'=>'Сможете ознакомиться низкие риски',
    'AbleToReviewMediumRisks'=>'Сможете ознакомиться средних рисках',
    'AbleToReviewHighRisks'=>'Сможете ознакомиться высоких рисков',
    'AllowAccessToConfigureMenu'=>'Разрешить доступ к "Настройка" меню',
    'MultiFactorAuthentication'=>'Многофакторная Проверка Подлинности',
    'None'=>'Никто',
    'Add'=>'Добавить',
    'ViewDetailsForUser'=>'Просмотреть подробности для пользователя',
    'DetailsForUser'=>'Реквизиты для пользователя',
    'Select'=>'Выберите',
    'EnableAndDisableUsers'=>'Включение и отключение пользователей',
    'EnableAndDisableUsersHelp'=>'Используйте эту функцию, чтобы включить или отключить логины пользователя при сохранении журнала аудита действий пользователя',
    'DisableUser'=>'Отключить пользователя',
    'Disable'=>'Отключить',
    'EnableUser'=>'Позволяют пользователю',
    'Enable'=>'Включить',
    'DeleteAnExistingUser'=>'Удалить существующего пользователя',
    'DeleteCurrentUser'=>'Удалить текущего пользователя',
    'Delete'=>'Удалить',
    'SendPasswordResetEmailForUser'=>'Отправить сброс пароля электронной почты для пользователя',
    'Category'=>'Категория',
    'AddNewCategoryNamed'=>'Добавление новой категории имени',
    'DeleteCurrentCategoryNamed'=>'Удалить текущую категорию имени',
    'Team'=>'Команда',
    'AddNewTeamNamed'=>'Добавить новую команду по имени',
    'DeleteCurrentTeamNamed'=>'Удалить текущую команду по имени',
    'Technology'=>'Технология',
    'AddNewTechnologyNamed'=>'Добавить новые технологии им.',
    'DeleteCurrentTechnologyNamed'=>'Удалить текущую технологии им.',
    'SiteLocation'=>'Сайт/Расположение',
    'AddNewSiteLocationNamed'=>'Добавление нового сайта под названием',
    'DeleteCurrentSiteLocationNamed'=>'Удалить текущий сайт/место имени',
    'ControlRegulation'=>'Регулирования',
    'AddNewControlRegulationNamed'=>'Добавить новые правила управления им',
    'DeleteCurrentControlRegulationNamed'=>'Удалить текущее регулирование управления имени',
    'RiskPlanningStrategy'=>'Стратегии Планирования Рисков',
    'AddNewRiskPlanningStrategyNamed'=>'Добавить новые стратегии планирования рисков по имени',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'Удаление текущей стратегии планирования рисков по имени',
    'CloseReason'=>'Рядом Причин',
    'AddNewCloseReasonNamed'=>'Добавить новый рядом причин назвал',
    'DeleteCurrentCloseReasonNamed'=>'Удалить текущую рядом причин назвал',
    'IWantToReviewHighRiskEvery'=>'Я хочу, чтобы каждый отзыв высокий риск',
    'IWantToReviewMediumRiskEvery'=>'Я хочу, чтобы каждый комментарий со средним риском',
    'IWantToReviewLowRiskEvery'=>'Я хочу, чтобы каждый отзыв низкий риск',
    'days'=>'дней',
    'MyClassicRiskFormulaIs'=>'Моя Классическая Формула Риска',
    'RISK'=>'Риск',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'Я считаю большой риск быть что-нибудь больше, чем',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'Я считаю средний риск будет меньше, чем прежде, но больше',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'Я считаю, низкий риск будет меньше, чем прежде, но больше',
    'HighRisk'=>'Высокий Риск',
    'MediumRisk'=>'Средний Риск',
    'LowRisk'=>'Низкий Риск',
    'Irrelevant'=>'Неактуально',
    'SubmitYourRisks'=>'Представить Ваши Риски',
    'PlanYourMitigations'=>'План Вашей Защиты',
    'PerformManagementReviews'=>'Проанализировать Отзывы Управление',
    'PrioritizeForProjectPlanning'=>'Приоритеты для планирования проекта',
    'ReviewRisksRegularly'=>'Обзор Рисков Регулярно',
    'DocumentANewRisk'=>'Документ Новый риск',
    'UseThisFormHelp'=>'Используйте эту форму для документа нового риска для рассмотрения в процессе управления рисками',
    'Subject'=>'Тема',
    'ExternalReferenceId'=>'Внешняя ссылка ИД',
    'ControlNumber'=>'Контрольный Номер',
    'Owner'=>'Владелец',
    'OwnersManager'=>'Менеджер владельца',
    'RiskScoringMethod'=>'Метод Оценки Риска',
    'CurrentLikelihood'=>'Текущая Вероятность',
    'CurrentImpact'=>'Текущее Влияние',
    'RiskAssessment'=>'Оценка Рисков',
    'AdditionalNotes'=>'Дополнительные Примечания',
    'UNREVIEWED'=>'UNREVIEWED',
    'PASTDUE'=>'ПРОСРОЧЕННЫЕ',
    'ID'=>'Идентификатор',
    'Status'=>'Статус',
    'Risk'=>'Риск',
    'DaysOpen'=>'Дни Открытых',
    'CalculatedRisk'=>'Просчитанный Риск',
    'SubmittedBy'=>'Представленный',
    'NextReviewDate'=>'Следующая Дата Рассмотрения',
    'CVSSRiskScoring'=>'Риск CVSS забил',
    'DREADRiskScoring'=>'Страх оценки рисков',
    'OWASPRiskScoring'=>'Риск owasp это забил',
    'CustomRiskScoring'=>'Пользовательские Оценки Риска',
    'MitigationPlanningHelp'=>'Ниже приведен список поданных риски, которые требуют планирования смягчения',
    'ManagementReviewHelp'=>'Ниже приведен список поданных риски, которые требуют пересмотра управления',
    'Submitted'=>'Представленный',
    'MitigationPlanned'=>'Смягчение Планируемых',
    'ManagementReview'=>'Комментарий Управления',
    'No'=>'Нет',
    'Yes'=>'Да',
    'AddAndRemoveProjects'=>'Добавлять и удалять проекты',
    'AddAndRemoveProjectsHelp'=>'Добавлять и удалять проекты, чтобы связать несколько рисков для определения приоритетов',
    'AddNewProjectNamed'=>'Добавить новый проект под названием',
    'DeleteCurrentProjectNamed'=>'Удалить текущий проект',
    'AddUnassignedRisksToProjects'=>'Добавить Неназначенные рисков проектов',
    'AddUnassignedRisksToProjectsHelp'=>'Перетащите неназначенные риски, отмеченные для рассмотрения в качестве проекта в соответствующем разделе проекта',
    'PrioritizeProjects'=>'Приоритеты Проектов',
    'PrioritizeProjectsHelp'=>'Двигаться вокруг проектов и изменить порядок приоритетов. После того, как закончите, не забудьте нажать кнопку "обновить", чтобы сохранить изменения',
    'SaveRisksToProjects'=>'Сохранение рисков для проектов',
    'RiskId'=>'Идентификатор риск',
    'RiskActions'=>'Действия Риск',
    'ReopenRisk'=>'Откройте Риска',
    'CloseRisk'=>'Закрыть Риска',
    'EditRisk'=>'Редактировать Риска',
    'PlanAMitigation'=>'План смягчения',
    'PerformAReview'=>'Выполнить Обзор',
    'AddAComment'=>'Добавить комментарий',
    'ShowRiskScoringDetails'=>'Показать Риском Скоринг Детали',
    'HideRiskScoringDetails'=>'Скрыть Риском Скоринг Детали',
    'Details'=>'Детали',
    'SubmissionDate'=>'Дата Подачи',
    'DateSubmitted'=>'Дата Подачи',
    'EditDetails'=>'Редактирование Детали',
    'Mitigation'=>'Смягчение',
    'MitigationDate'=>'Дата Смягчение',
    'PlanningStrategy'=>'Стратегия Планирования',
    'CurrentSolution'=>'Текущее Решение',
    'SecurityRequirements'=>'Требования Безопасности',
    'SecurityRecommendations'=>'Рекомендации По Безопасности',
    'EditMitigation'=>'Редактировать Смягчения',
    'LastReview'=>'Последний Комментарий',
    'ReviewDate'=>'Дата Проверки',
    'Reviewer'=>'Рецензент',
    'Review'=>'Комментарий',
    'NextStep'=>'Следующий Шаг',
    'Comments'=>'Комментарии',
    'ViewAllReviews'=>'Посмотреть Все Отзывы',
    'ReviewHistory'=>'История Обзор',
    'Comment'=>'Комментарий',
    'ClassicRiskScoring'=>'Классический Подсчет Рисков',
    'RiskScoringActions'=>'Забив Действия Риска',
    'UpdateClassicScore'=>'Обновление Классический Результат',
    'ScoreBy'=>'Счет',
    'RISKClassicExp1'=>'Риск = ( вероятность х влияние + 2(удар) )',
    'RISKClassicExp2'=>'Риск = ( вероятность х воздействие + воздействие )',
    'RISKClassicExp3'=>'Риск = ( вероятность х влияние )',
    'RISKClassicExp4'=>'Риск = ( вероятность х воздействие + вероятность )',
    'RISKClassicExp5'=>'Риск = ( вероятность х влияние + 2(вероятность) )',
    'Reason'=>'Причина',
    'CloseOutInformation'=>'Закрытие Информации',
    'SubmitManagementReview'=>'Отправить Отзыв Управления',
    'SubmitRiskMitigation'=>'Представить Минимизации Рисков',
    'RiskDashboard'=>'Приборная Панель Риск',
    'RiskTrend'=>'Тенденции Риска',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'Все открытые риски, присвоенное мне по уровню риска',
    'AllOpenRisksByRiskLevel'=>'Все открытые рисков по уровню риска',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'Все открытые рисков считается проектов по уровню риска',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'Все открытые риски принимаются до следующего обзора на уровне риска,',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'Все открытые риски представить в виде выпуска продукции на уровень риска',
    'AllOpenRisksByScoringMethod'=>'Все открытые рисков метод оценки',
    'AllClosedRisksByRiskLevel'=>'Все закрытые рисков по уровню риска',
    'SubmittedRisksByDate'=>'Представленный Риски По Дате',
    'MitigationsByDate'=>'Исправления По Дате',
    'ManagementReviewsByDate'=>'Управление Комментарии По Дате',
    'ProjectsAndRisksAssigned'=>'Проекты и риски назначен',
    'OpenRisks'=>'Открытые Риски',
    'ClosedRisks'=>'Закрытые Риски',
    'ReportMyOpenHelp'=>'Этот отчет показывает все открытые риски, что у текущего пользователя в качестве владельца или управляющего, связанные с риском упорядоченных по уровню риска',
    'ReportOpenHelp'=>'Этот отчет показывает все открытые рисков, упорядоченный по степени риска',
    'ReportProjectsHelp'=>'Этот отчет показывает все открытые рисков считается проектов упорядоченный по степени риска',
    'ReportNextReviewHelp'=>'Этот отчет показывает все открытые риски принимаются до следующего обзора заказал по уровню риска',
    'ReportProductionIssuesHelp'=>'Этот отчет показывает все открытые риски представлены как производственные вопросы, упорядоченные по уровню риска',
    'ReportRiskScoringHelp'=>'Этот отчет показывает все методы оценки рисков и рисков забил через каждый',
    'ReportClosedHelp'=>'Этот отчет показывает все закрытые риски упорядоченных по уровню риска',
    'ReportSubmittedByDateHelp'=>'Этот отчет показывает все риски упорядочены по дате подачи',
    'ReportMitigationsByDateHelp'=>'Этот отчет показывает все способы планировали упорядочены по дате смягчения',
    'ReportMgmtReviewsByDateHelp'=>'Этот отчет показывает все управление отзывы упорядочены по дате комментарий',
    'ReportProjectsAndRisksHelp'=>'Этот отчет показывает все проекты и риски, возложенные на них',
    'Language'=>'Язык',
    'AllOpenRisksNeedingReview'=>'Все открытые риски, нуждающихся в комментарий',
    'ReportReviewNeededHelp'=>'Этот отчет показывает все открытые риски необходимости управленческий',
    'CustomValue'=>'Пользовательское Значение',
    'ClosedRisksByDate'=>'Закрытые Риски По Дате',
    'DateClosed'=>'Дата Закрытия',
    'ClosedBy'=>'Закрыто',
    'ReportClosedByDateHelp'=>'Этот отчет показывает все риски упорядочены по дате закрытия',
    'AllOpenRisksByTeam'=>'Все открытые риски команда',
    'ReportRiskTeamsHelp'=>'Этот отчет показывает все команды и рисков, присвоенных каждому',
    'Unassigned'=>'Неназначенные',
    'AllOpenRisksByTechnology'=>'Все Открытые Риски По Технологии',
    'ReportRiskTechnologiesHelp'=>'Этот отчет показывает все технологии и риски, присвоенных каждому',
    'RiskLevel'=>'Уровень Риска',
    'BasedOnTheCurrentRiskScore'=>'На основе текущей оценки риска, следующая Дата пересмотра будет ',
    'WouldYouLikeToUseADifferentDate'=>'Хотели бы вы использовать вместо другую дату?',
    'RisksOpenedAndClosedOverTime'=>'Открыт риски и закрыто со временем',
    'AllRiskScoresAreAdjusted'=>'Все оценки риска подогнать по шкале 0-10.',
    'DetermineProjectStatus'=>'Определить Статус Проекта',
    'ProjectStatusHelp'=>'Разместить проекты на сегменты в зависимости от текущего состояния.',
    'ActiveProjects'=>'Активные Проекты',
    'OnHoldProjects'=>'На Удержание Проектов',
    'CompletedProjects'=>'Завершенные Проекты',
    'CancelledProjects'=>'Отмененные Проекты',
    'UpdateProjectStatuses'=>'Проект Обновления Статусов',
    'HighRiskReport'=>'Доклад Высокий Риск',
    'TotalOpenRisks'=>'Общая Открытая Риски',
    'TotalHighRisks'=>'Общая Высокими Рисками',
    'HighRiskPercentage'=>'Высокий Процент Риска',
    'UpdateClassicScore'=>'Обновление Классический Результат',
    'CurrentLikelihood'=>'Текущая Вероятность',
    'CurrentImpact'=>'Текущее Влияние',   
    'UpdateCVSSScore'=>'Обновление CVSS результат',
    'BaseScoreMetrics'=>'Базовые Показатели Результат',
    'AttackVector'=>'Вектор Атаки',
    'AttackComplexity'=>'Сложность Атаки',
    'Authentication'=>'Проверка подлинности',
    'ConfidentialityImpact'=>'Влияние Конфиденциальность',
    'IntegrityImpact'=>'Влияние Целостности',
    'AvailabilityImpact'=>'Доступность',
    'TemporalScoreMetrics'=>'Временные Показатели Результат',
    'Exploitability'=>'Исчерпаемости',
    'RemediationLevel'=>'Уровень Восстановления',
    'ReportConfidence'=>'Уверенность Доклад',
    'EnvironmentalScoreMetrics'=>'Показатели Экологическая Оценка',
    'CollateralDamagePotential'=>'Обеспечения Потенциального Ущерба',
    'TargetDistribution'=>'Целераспределение',
    'ConfidentialityRequirement'=>'Требование Конфиденциальности',
    'IntegrityRequirement'=>'Требование Целостности',
    'AvailabilityRequirement'=>'Требование Наличия',
    'UpdateDREADScore'=>'Боюсь обновлять результат',
    'DamagePotential'=>'Потенциального Ущерба',
    'Reproducibility'=>'Воспроизводимость',
    'AffectedUsers'=>'Пострадавшие Пользователи',
    'Discoverability'=>'Обнаруживаемость',
    'UpdateOWASPScore'=>'Обновить список owasp результат',
    'ThreatAgentFactors'=>'Опасным Факторы Агент',
    'SkillLevel'=>'Уровень Квалификации',
    'Motive'=>'Мотив',
    'Opportunity'=>'Возможность',
    'Size'=>'Размер',
    'VulnerabilityFactors'=>'Факторы Уязвимости',
    'EaseOfDiscovery'=>'Легкость открытия',
    'EaseOfExploit'=>'Простота использовать',
    'Awareness'=>'Осознание',
    'IntrusionDetection'=>'Обнаружения Вторжений',
    'TechnicalImpact'=>'Техническое Воздействие',
    'LossOfConfidentiality'=>'Потеря конфиденциальности',
    'LossOfIntegrity'=>'Потеря целостности',
    'LossOfAvailability'=>'Потери доступности',
    'LossOfAccountability'=>'Убытки в отчетности',
    'BusinessImpact'=>'Влияние На Бизнес',
    'FinancialDamage'=>'Финансовый Ущерб',
    'ReputationDamage'=>'Ущерб Репутации',
    'NonCompliance'=>'Несоблюдение',
    'PrivacyViolation'=>'Нарушение Конфиденциальности',
    'UpdateCustomScore'=>'Обновление Пользовательских Результат',
    'ManuallyEnteredValue'=>'Введенное Значение',
    'ScoreByClassic'=>'Результат классический',
    'ScoreByCVSS'=>'Результат по CVSS',
    'ScoreByDREAD'=>'Результат страх',
    'ScoreByOWASP'=>'Счет фонд',
    'ScoreByCustom'=>'Результат пользовательских',
    'BaseVector'=>'Базовый Вектор',
    'TemporalVector'=>'Временной Вектор',
    'EnvironmentalVector'=>'Экологический Вектор',
    'SupportingDocumentation'=>'Сопроводительная Документация',
    'Import'=>'Импорт',
    'Export'=>'Экспорт',
    'ActivateTheImportExportExtra'=>'Активировать импорт/экспорт дополнительных',
    'PrintableView'=>'Вид Для Печати',
    'GroupBy'=>'Группа По',
    'IncludedColumns'=>'Включенные Столбцы',
    'AllRisks'=>'Все Риски',
    'DynamicRiskReport'=>'Динамический Отчет О Рисках',
    'ObsoleteReports'=>'Устаревшие Отчеты',
    'Project'=>'Проект',
    'SortBy'=>'Сортировать По',
    'MonthSubmitted'=>'Месяц Представил',
    'AssetManagement'=>'Управление Активами',
    'AutomatedDiscovery'=>'Автоматическое Обнаружение',
    'BatchImport'=>'Пакетный Импорт',
    'ManageAssets'=>'Управление Активами',
    'AssetValuation'=>'Оценка Стоимости Активов',
    'AllowAccessToAssetManagementMenu'=>'Разрешить доступ к меню "Управление активами" ',
    'AutomatedDiscoveryHelp'=>'Узнайте обо всем, текущий IP-адресов при вводе IP-адресов. Текущий IP-адрес будет добавлен в список активов. Допустимые форматы:',
    'IPRange'=>'Диапазон IP-адресов',
    'Search'=>'Поиск',
    'AddANewAsset'=>'Добавить новый Актив',
    'DeleteAnExistingAsset'=>'Удалить существующий Актив',
    'AssetName'=>'Наименование Актива',
    'IPAddress'=>'IP-адрес',
    'AssetWasAddedSuccessfully'=>'Актив был успешно добавлен.',
    'AssetWasDeletedSuccessfully'=>'Актив был успешно удален.',
    'ThereWasAProblemAddingTheAsset'=>'Возникла проблема с добавлением актив.',
    'ThereWasAProblemDeletingTheAsset'=>'Возникла проблема удаления актива.',
    'ComingSoon'=>'Скоро',
    'ExportRisks'=>'Экспортные Риски',
    'ExportMitigations'=>'Экспорт Исправлений',
    'ExportReviews'=>'Отзывы Экспорт',
    'ExportCombined'=>'Экспорт Смешанная',
    'MitigatedBy'=>'Смягчено',
    'MitigationId'=>'Идентификатор смягчения',
    'ReviewId'=>'Комментарий ИД',
    'AffectedAssets'=>'Затронутых Активов',
    'Activate'=>'Активировать',
    'DeleteRisks'=>'Удалить Риски',
    'DeletedRisksCannotBeRecovered'=>'Исключить Риски Не Могут Быть Восстановлены',
    'RisksDeletedSuccessfully'=>'Риск(ы) успешно удален',
    'ThereWasAProblemDeletingTheRisk'=>'Возникла проблема удаления риска(ов)',
    'Activated'=>'Активированный',
    'IWantToReviewInsignificantRiskEvery'=>'Я хочу, чтобы каждый обзор незначительный риск',
    'Insignificant'=>'Незначительные',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'Я считаю, очень высокий риск быть что-нибудь больше, чем',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'Я считаю высокий риск меньше, чем прежде, но больше',
    'VeryHigh'=>'Очень Высокая',
    'VeryHighRisk'=>'Очень Высокий Риск',
    'IWantToReviewVeryHighRiskEvery'=> 'Я хочу, чтобы каждый отзыв очень высокий риск',
    'AbleToReviewVeryHighRisks'=>'Возможность обзора очень высокие риски',
    'AbleToReviewInsignificantRisks'=>'Сможете ознакомиться незначительные риски',
    'TotalVeryHighRisks'=>'Всего Очень Высокие Риски',
    'VeryHighRiskPercentage'=>'Очень Высокий Процент Риска',
    'AllTeams'=>'Все Команды',
    'FileUploadSettings'=>'Файл Параметров Загрузки',
    'AllowedFileTypes'=>'Разрешенные Типы Файлов',
    'AddNewFileTypeOf'=>'Добавить новый тип файла',
    'DeleteCurrentFileTypeOf'=>'Удалить текущую Тип файла',
    'MaximumUploadFileSize'=>'Максимальный Размер Загружаемого Файла',
    'Bytes'=>'Байт',
    'CheckAll'=>'Проверить Все',
    'CheckAllRiskMgmt'=>'Проверить Все Управления Рисками',
    'CheckAllAssetMgmt'=>'Проверьте ВСЕ Управление Активами',
    'CheckAllConfigure'=>'Проверьте Все Настройки',
    'MitigationTeam'=>'Команда Смягчения',
    'ImportRisks'=>'Импорт Риски',
    'ImportAssets'=>'Импорт Активов',
    'AssetValue'=>'Стоимость Активов',
    'Register'=>'Зарегистрироваться',
    'RegisterSimpleRisk'=>'Зарегистрировать SimpleRisk',
    'RegistrationText'=>'Зарегистрировавшись SimpleRisk вы сможете предоставить свою контактную информацию, так что вы можете быть в курсе последней информации релиз и важные уведомления безопасности. Ваши данные никогда не будут проданы третьей стороне. Зарегистрированы случаи также имеют возможность быть сохранены и обновлены с одним нажатием кнопки.',
    'RegistrationInformation'=>'Регистрационные Сведения',
    'Company'=>'Компания',
    'JobTitle'=>'Должность',
    'Phone'=>'Телефон',
    'UpgradeSimpleRisk'=>'SimpleRisk Обновления',
    'UpgradeInstructions'=>'Этот раздел использует обновление дополнительных. Чтобы убедиться, что у вас установлена последняя версия, выберите "обновить", перерегистрироваться, и обновите эту страницу.',
    'NoUpgradeNeeded'=>'Обновление не требуется на этот раз.',
    'BackupDatabase'=>'Резервное копирование базы данных',
    'UpgradeApplication'=>'Обновить Приложение',
    'UpgradeDatabase'=>'Обновить базу данных',
    'CustomExtras'=>'Пользовательские Приложения',
    'CustomExtrasText'=>'Было бы круто, если бы все было бесплатно, да? Надеюсь базовой платформы SimpleRisk способен обслуживать все Ваши потребности в управлении рисками. Но, если вы окажетесь желая еще больше функциональности, мы разработали серию "Экстра", которые будут делать именно это.',
    'Upgrade'=>'Обновление',
    'Install'=>'Установите',
    'Purchase'=>'Купить',
    'PasswordPolicy'=>'Политики Паролей',
    'MinimumNumberOfCharacters'=>'Минимальное количество символов',
    'RequireAlphaCharacter'=>'Требует Альфа-Символ',
    'RequireUpperCaseCharacter'=>'Требуется Верхний Регистр Символов',
    'RequireLowerCaseCharacter'=>'Требуют Нижнего Регистра',
    'RequireNumericCharacter'=>'Требуют Числовой Символ',
    'RequireSpecialCharacter'=>'Требуют Специального Символа',
    'Enabled'=>'Включено',
    'RiskPyramid'=>'Пирамида Рисков',
    'RiskPyramidDescription'=>'Риск выше пирамиды позволяет показать распределение рисков между различными уровнями риска. Топ тяжелый пирамида может быть признаком того, что ваша организация берет на себя слишком много риска.',
    'RiskAdvice'=>'Советы Риск',
    'AddDeleteAssets'=>'Добавление И Удаление Активов',
    'EditAssets'=>'Изменение Активов',
    'AutomaticAssetValuation'=>'Автоматическая Оценка Стоимости Активов',
    'ManualAssetValuation'=>'Руководство По Оценке Активов',
    'MinimumValue'=>'Минимальное Значение',
    'MaximumValue'=>'Максимальное Значение',
    'ValueRange'=>'Диапазон Значений',
    'DefaultAssetValuation'=>'Оценка Стоимости Актива По Умолчанию',
    'Default'=>'По умолчанию',
    'RisksAndAssets'=>'Риски и активы',
    'Report'=>'Отчет',
    'RisksByAsset'=>'Риски активов',
    'AssetsByRisk'=>'Активов по степени риска',
    'MaximumQuantitativeLoss'=>'Максимальные Количественные Потери',
    'MitigationOwner'=>'Владелец Смягчения',
    'MitigationCost'=>'Расходов По Смягчению Последствий',
    'RiskColumns'=>'Столбцы Риск',
    'MitigationColumns'=>'Колонны Смягчения',
    'ReviewColumns'=>'Колонки Обзор',
    'ChangeStatus'=>'Смена Статуса',
    'SetRiskStatusTo'=>'Установить Статус Риска',
    'AddNewStatusNamed'=>'Добавить новый статус имени',
    'DeleteStatusNamed'=>'Статус удаления имени',
    'DefaultCurrencySymbol'=>'Символ Валюты По Умолчанию',
    'DefaultValues'=>'Значения По Умолчанию',
    'RiskSource'=>'Источник Риска',
    'AddNewSourceNamed'=>'Добавить новый источник по имени',
    'DeleteSourceNamed'=>'Удалить источник имени',
    'CheckAllAssessments'=>'Проверить Все Оценки',
    'AllowAccessToAssessmentsMenu'=>'Разрешить доступ к меню "оценки" ',
    'Assessments'=>'Оценок',
    'AvailableAssessments'=>'Имеющиеся Оценки',
    'PendingRisks'=>'Отложенные Риски',
    'CreateAssessment'=>'Создать Оценки',
    'EditAssessment'=>'Редактировать Оценки',
    'Overview'=>'Обзор',
    'OpenVsClosed'=>'Открытые против закрытых',
    'MitigatedVsUnmitigated'=>'Смягчить против Неподслащенной',
    'ReviewedVsUnreviewed'=>'Рассмотрел против Unreviewed',
    'OpenedRisks'=>'Открыт Риски',
    'MailSettings'=>'Настройки Почты',
    'TransportAgent'=>'Транспортный Агент',
    'FromName'=>'От Имени',
    'FromEmail'=>'Из Электронной Почты',
    'ReplyToName'=>'Имя Отправителя',
    'ReplyToEmail'=>'Адреса Электронной Почты',
    'Host'=>'Хозяин',
    'SMTPAuthentication'=>'Проверку подлинности SMTP',
    'Encryption'=>'Шифрование',
    'Port'=>'Порт',
    'Next'=>'Далее',
    'NewAssessmentQuestion'=>'Новый Вопрос Оценки',
    'Question'=>'Вопрос',
    'RiskScore'=>'Оценка Риска',
    'SubmitRisk'=>'Представлять Опасность',
    'Answer'=>'Ответ',
    'AddQuestion'=>'Добавить Вопрос',
    'SaveAssessment'=>'Сохранить Оценки',
    'SendAssessment'=>'Отправить Оценки',
    'DeleteAssessment'=>'Удалить Оценки',
    'AssessmentName'=>'Имя Оценка',
    'SendTo'=>'Отправить',
    'ActiveAssessments'=>'Активный Оценок',
    'SentTo'=>'Отправлено',
    'From'=>'Из',
    'Key'=>'Ключ',
    'GoToSSOLoginPage'=>'Перейти к SSO Вход Страница',
    'APIKey'=>'Ключ API',
    'GenerateAPIKey'=>'Генерация ключа API',
    'RotateAPIKey'=>'Повернуть ключ API',
    'InvalidateAPIKey'=>'аннулировать ключ API',
    'Deactivate'=>'дезактивировать',
    'ImportExportExtra'=>'Import-Export Extra',
    'SaveDetails'=>'Сохранить подробности',
    'ClearForm'=>'Наглядная форма',
    'SaveMitigation'=>'Сохранить Смягчение',
    'Cancel'=>'Отмена',
    'SubmitReview'=>'добавить отзыв',
    'UnassignedRisks'=>'Нераспределенные Риски',
    'DisableRegistrationNotice'=>'Отключить регистрации Примечание',
    'UserPolicy'=>'Политика пользователя',
    'UseCaseSensitiveValidationOfUsername'=>'Use Case Sensitive Валидация Имя пользователя',
    'MitigationPlanning'=>'Планируемая дата Смягчение',
    'AssetDetails'=>'Детали активов',
    'RiskList'=>'Список рисков',
    'Are you sure you want to close the risk? All changes will be lost!'=>'Вы уверены, что хотите закрыть этот риск? Все изменения будут потеряны!',
    'MinimumPasswordAge' => 'Минимальный срок действия пароля',
    'MaximumPasswordAge' => 'Максимальный срок действия пароля',
    'MaximumAttemptsLockout' => 'Максимальное количество попыток блокировки',
    'MaximumAttemptsLockoutTime' => 'Максимальное количество попыток Время блокировки',
    'attempts'=>'попытки',
    'minutes'=>'минут',
    'AccountLockedOut'=>'Блокировка учетной записи',
    'AccountLockoutPolicy'=>'Счет Политика блокировки',
    ''=>'',
);

?>
