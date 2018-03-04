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
    'Home'=>'回家的',
    'RiskManagement'=>'风险管理',
    'Reporting'=>'报告',
    'Configure'=>'配置',
    'MyProfile'=>'我的档案',
    'Logout'=>'注销',
    'LogInHere'=>'登錄到 SimpleRisk',
    'Username'=>'用户名',
    'Password'=>'密码',
    'ForgotYourPassword'=>'忘了你的密码',
    'Login'=>'登陆',
    'Reset'=>'重新设置',
    'Send'=>'送',
    'Update'=>'最新情况',
    'SendPasswordResetEmail'=>'把密码重置电子邮件',
    'PasswordReset'=>'密码重置',
    'ResetToken'=>'重的象征',
    'RepeatPassword'=>'重复密码',
    'Submit'=>'提交',
    'ProfileDetails'=>'简介的详细情况',
    'LastLogin'=>'上次登陆',
    'ChangePassword'=>'改变密码',
    'CurrentPassword'=>'目前的密码',
    'NewPassword'=>'新密码',
    'ConfirmPassword'=>'确认密码',
    'ConfigureRiskFormula'=>'设置危险的方式',
    'ConfigureReviewSettings'=>'配置审查的环境中',
    'AddAndRemoveValues'=>'增加和删除的价值观',
    'UserManagement'=>'用户的管理',
    'RedefineNamingConventions'=>'重新命名约定',
    'AuditTrail'=>'审计线索',
    'Extras'=>'临时演员',
    'Announcements'=>'通告',
    'About'=>'关于',
    'Impact'=>'影响',
    'Likelihood'=>'有可能',
    'MitigationEffort'=>'减轻气候变化影响努力的前列',
    'Change'=>'变化',
    'to'=>'去',
    'AddANewUser'=>'增加一个新的用户',
    'Type'=>'类型',
    'FullName'=>'全名',
    'EmailAddress'=>'电子邮件地址',
    'Teams'=>'工作队(s)',
    'ALL'=>'所有',
    'NONE'=>'都没有',
    'UserResponsibilities'=>'用户的责任',
    'AbleToSubmitNewRisks'=>'能够提出新的风险',
    'AbleToModifyExistingRisks'=>'能够改变现有的风险',
    'AbleToCloseRisks'=>'能够密切的风险',
    'AbleToPlanMitigations'=>'能够在计划的缓解',
    'AbleToReviewLowRisks'=>'审查了低风险',
    'AbleToReviewMediumRisks'=>'能够审查中的风险',
    'AbleToReviewHighRisks'=>'能够审查的高风险',
    'AllowAccessToConfigureMenu'=>'允许接触"配置"的菜单',
    'MultiFactorAuthentication'=>'多因素的认证',
    'None'=>'都没有',
    'Add'=>'增加',
    'ViewDetailsForUser'=>'为了详细的用户',
    'DetailsForUser'=>'详细的用户',
    'Select'=>'选择',
    'EnableAndDisableUsers'=>'使破坏者',
    'EnableAndDisableUsersHelp'=>'使用这一特点使或关闭用户logins同时保持审计线索的用户活动',
    'DisableUser'=>'关闭用户',
    'Disable'=>'解除',
    'EnableUser'=>'能使用户',
    'Enable'=>'使',
    'DeleteAnExistingUser'=>'删除现有的用户',
    'DeleteCurrentUser'=>'删除目前的用户',
    'Delete'=>'删除',
    'SendPasswordResetEmailForUser'=>'把密码重置电子邮件用户',
    'Category'=>'职类',
    'AddNewCategoryNamed'=>'增加新的类别叫',
    'DeleteCurrentCategoryNamed'=>'删除目前的类别叫',
    'Team'=>'小组',
    'AddNewTeamNamed'=>'增加新的小组叫',
    'DeleteCurrentTeamNamed'=>'删除目前的小组叫',
    'Technology'=>'技术',
    'AddNewTechnologyNamed'=>'增加新的技术叫',
    'DeleteCurrentTechnologyNamed'=>'删除目前的技术叫',
    'SiteLocation'=>'场地/地点',
    'AddNewSiteLocationNamed'=>'增加新的场地/地点叫',
    'DeleteCurrentSiteLocationNamed'=>'删除目前的场地/地点叫',
    'ControlRegulation'=>'管制条例',
    'AddNewControlRegulationNamed'=>'增加新的管制条例叫',
    'DeleteCurrentControlRegulationNamed'=>'删除现有的管制条例叫',
    'RiskPlanningStrategy'=>'风险战略规划',
    'AddNewRiskPlanningStrategyNamed'=>'增加新的风险的规划战略叫',
    'DeleteCurrentRiskPlanningStrategyNamed'=>'删除目前的风险的规划战略叫',
    'CloseReason'=>'密切的原因',
    'AddNewCloseReasonNamed'=>'增加新的亲密原因叫',
    'DeleteCurrentCloseReasonNamed'=>'删除目前的密切理由叫',
    'IWantToReviewHighRiskEvery'=>'我想审查的高风险每',
    'IWantToReviewMediumRiskEvery'=>'我想审查中的风险每',
    'IWantToReviewLowRiskEvery'=>'我想要审查风险较低的每',
    'days'=>'天',
    'MyClassicRiskFormulaIs'=>'我的典型风险的公式',
    'RISK'=>'风险',
    'IConsiderHighRiskToBeAnythingGreaterThan'=>'我認為高風險是任何大於或等於',
    'IConsiderMediumRiskToBeLessThanAboveButGreaterThan'=>'我認為中等風險小於以上, 但大於或等於',
    'IConsiderlowRiskToBeLessThanAboveButGreaterThan'=>'我認為低風險小於以上, 但大於或等於',
    'HighRisk'=>'高风险',
    'MediumRisk'=>'中风险',
    'LowRisk'=>'低风险',
    'Irrelevant'=>'无关紧要',
    'SubmitYourRisks'=>'提交風險',
    'PlanYourMitigations'=>'計畫緩解',
    'PerformManagementReviews'=>'執行點評',
    'PrioritizeForProjectPlanning'=>'計畫專案',
    'ReviewRisksRegularly'=>'定期檢討',
    'DocumentANewRisk'=>'文件a的新的风险',
    'UseThisFormHelp'=>'使用这一形式，以便在文件a的新的风险考虑的风险管理进程',
    'Subject'=>'受',
    'ExternalReferenceId'=>'外部提及的身份证',
    'ControlNumber'=>'控制数目',
    'Owner'=>'所有人',
    'OwnersManager'=>'擁有者的經理',
    'RiskScoringMethod'=>'风险评分方法',
    'CurrentLikelihood'=>'目前有可能',
    'CurrentImpact'=>'当前的影响',
    'RiskAssessment'=>'风险评估',
    'AdditionalNotes'=>'附注',
    'UNREVIEWED'=>'審閱',
    'PASTDUE'=>'过去的原因',
    'ID'=>'身份证',
    'Status'=>'地位',
    'Risk'=>'风险',
    'DaysOpen'=>'天开',
    'CalculatedRisk'=>'计算风险',
    'SubmittedBy'=>'提交',
    'NextReviewDate'=>'下一个审查日期',
    'CVSSRiskScoring'=>'CVSS风险评分',
    'DREADRiskScoring'=>'可怕的风险评分',
    'OWASPRiskScoring'=>'OWASP风险评分',
    'CustomRiskScoring'=>'习惯了风险评分',
    'MitigationPlanningHelp'=>'下文的清单提交了风险，需要缓解规划',
    'ManagementReviewHelp'=>'下文的清单提交了风险，需要一个管理审查',
    'Submitted'=>'提交',
    'MitigationPlanned'=>'缓解计划',
    'ManagementReview'=>'管理审查',
    'No'=>'不是的',
    'Yes'=>'是的',
    'AddAndRemoveProjects'=>'增加和删除项目',
    'AddAndRemoveProjectsHelp'=>'增加和删除的项目，以便协理多重风险，优先次序',
    'AddNewProjectNamed'=>'增加新的项目叫',
    'DeleteCurrentProjectNamed'=>'删除目前的项目叫',
    'AddUnassignedRisksToProjects'=>'加上未分配的风险项目',
    'AddUnassignedRisksToProjectsHelp'=>'拖放未分配的风险，标志着为审议作为一个项目的适当项目账上',
    'PrioritizeProjects'=>'优先项目',
    'PrioritizeProjectsHelp'=>'动项目和变革的顺序确定优先次序。 一旦完成，不要忘了新闻发布的"最新"的按钮就可以拯救你的变化',
    'SaveRisksToProjects'=>'救风险项目',
    'RiskId'=>'冒险的身份证',
    'RiskActions'=>'行動',
    'ReopenRisk'=>'重新开放风险',
    'CloseRisk'=>'密切的风险',
    'EditRisk'=>'编辑风险',
    'PlanAMitigation'=>'计划的一个减缓',
    'PerformAReview'=>'进行审查',
    'AddAComment'=>'增加一个评论',
    'ShowRiskScoringDetails'=>'查看風險評分詳細資訊',
    'HideRiskScoringDetails'=>'藏起来了风险评分细节',
    'Details'=>'详细情况',
    'SubmissionDate'=>'提交日期',
    'DateSubmitted'=>'迄今提交',
    'EditDetails'=>'编辑细节',
    'Mitigation'=>'缓解',
    'MitigationDate'=>'緩解提交日期',
    'PlanningStrategy'=>'规划战略',
    'CurrentSolution'=>'目前的解决办法',
    'SecurityRequirements'=>'安全要求',
    'SecurityRecommendations'=>'安全建议',
    'EditMitigation'=>'编辑的缓解',
    'LastReview'=>'最后审查',
    'ReviewDate'=>'审查日期',
    'Reviewer'=>'审查员',
    'Review'=>'审查',
    'NextStep'=>'下一个步骤',
    'Comments'=>'评论意见',
    'ViewAllReviews'=>'认为所有的审查',
    'ReviewHistory'=>'审查历史',
    'Comment'=>'评论',
    'ClassicRiskScoring'=>'典型的风险评分',
    'RiskScoringActions'=>'风险评分的行动',
    'UpdateClassicScore'=>'更新典型的得分',
    'ScoreBy'=>'得分',
    'RISKClassicExp1'=>'风险=(有可能是x的影响+2(影响))',
    'RISKClassicExp2'=>'风险=(有可能是x的影响+影响)',
    'RISKClassicExp3'=>'风险=(有可能是x的影响)',
    'RISKClassicExp4'=>'风险=(有可能是x的影响+可能性)',
    'RISKClassicExp5'=>'风险=(有可能是x的影响+2(可能性))',
    'Reason'=>'因',
    'CloseOutInformation'=>'亲密的信息',
    'SubmitManagementReview'=>'提交管理审查',
    'SubmitRiskMitigation'=>'提出减轻风险',
    'RiskDashboard'=>'危险的跟踪仪表板',
    'RiskTrend'=>'危险的趋势',
    'AllOpenRisksAssignedToMeByRiskLevel'=>'分配給我的所有打開風險',
    'AllOpenRisksByRiskLevel'=>'所有开风险的风险水平',
    'AllOpenRisksConsideredForProjectsByRiskLevel'=>'所有公开的危险考虑对于项目的风险水平',
    'AllOpenRisksAcceptedUntilNextReviewByRiskLevel'=>'所有公开接受的风险，直至下一次审查的风险水平',
    'AllOpenRisksToSubmitAsAProductionIssueByRiskLevel'=>'所有公开的危险提出作为生产问题的风险水平',
    'AllOpenRisksByScoringMethod'=>'所有公开的风险评分方法',
    'AllClosedRisksByRiskLevel'=>'所有关闭风险的风险水平',
    'SubmittedRisksByDate'=>'提交风险的日期',
    'MitigationsByDate'=>'缓解的约会',
    'ManagementReviewsByDate'=>'管理审查的日期',
    'ProjectsAndRisksAssigned'=>'项目和风险的分配',
    'OpenRisks'=>'开放的风险',
    'ClosedRisks'=>'关闭的危险',
    'ReportMyOpenHelp'=>'本报告表明的所有公开的危险，当前用户以所有人或管理人有关的危险命令的风险水平',
    'ReportOpenHelp'=>'本报告表明的所有公开的危险命令的风险水平',
    'ReportProjectsHelp'=>'本报告表明的所有公开的危险考虑的项目下令的风险水平',
    'ReportNextReviewHelp'=>'本报告表明的所有公开接受的风险，直至下一次审查命令的风险水平',
    'ReportProductionIssuesHelp'=>'本报告表明的所有公开的危险提出作为生产问题的命令的风险水平',
    'ReportRiskScoringHelp'=>'本报告表明的所有风险评分方法和风险分利用每',
    'ReportClosedHelp'=>'这份报告显示所有封闭的危险命令的风险水平',
    'ReportSubmittedByDateHelp'=>'本报告表明的所有风险命令的提交日期',
    'ReportMitigationsByDateHelp'=>'这份报告显示所有的缓解计划的命令受缓解日',
    'ReportMgmtReviewsByDateHelp'=>'本报告表明的所有管理审查，下令审查日期',
    'ReportProjectsAndRisksHelp'=>'本报告表明的所有项目和风险分配给他们的',
    'Language'=>'的语言',
    'AllOpenRisksNeedingReview'=>'所有公开的危险需要一个审查',
    'ReportReviewNeededHelp'=>'本报告表明的所有公开的危险需要一个管理审查',
    'CustomValue'=>'风俗的价值',
    'ClosedRisksByDate'=>'关闭风险的日期',
    'DateClosed'=>'日关闭',
    'ClosedBy'=>'闭的',
    'ReportClosedByDateHelp'=>'本报告表明的所有风险下令关闭的日期',
    'AllOpenRisksByTeam'=>'所有开风险的小组',
    'ReportRiskTeamsHelp'=>'这份报告显示所有的小队和风险分配给每个',
    'Unassigned'=>'未分配的',
    'AllOpenRisksByTechnology'=>'所有开风险的技术',
    'ReportRiskTechnologiesHelp'=>'本报告表明的所有技术和风险分配给每个',
    'RiskLevel'=>'风险级别',
    'BasedOnTheCurrentRiskScore'=>'基於你的風險評分，你下次的檢討日期將',
    'WouldYouLikeToUseADifferentDate'=>'你想使用一个不同的日期，而不是吗?',
    'RisksOpenedAndClosedOverTime'=>'风险开启和关闭时间',
    'AllRiskScoresAreAdjusted'=>'所有风险的分数进行调整以适用于0至10的规模。',
    'DetermineProjectStatus'=>'确定的项目状况',
    'ProjectStatusHelp'=>'地方项目变成一桶根据目前的状况。',
    'ActiveProjects'=>'积极的项目',
    'OnHoldProjects'=>'搁置的项目',
    'CompletedProjects'=>'已完成的项目',
    'CancelledProjects'=>'取消的项目',
    'UpdateProjectStatuses'=>'更新项目的状况',
    'HighRiskReport'=>'高风险的报告',
    'TotalOpenRisks'=>'总共开放的风险',
    'TotalHighRisks'=>'总的高风险',
    'HighRiskPercentage'=>'高风险的百分比',
    'UpdateClassicScore'=>'更新經典得分',
    'UpdateCVSSScore'=>'更新CVSS分',
    'BaseScoreMetrics'=>'基地分的衡量标准',
    'AttackVector'=>'攻击向量',
    'AttackComplexity'=>'攻击复杂性',
    'Authentication'=>'认证',
    'ConfidentialityImpact'=>'保密的影响',
    'IntegrityImpact'=>'完整的影响',
    'AvailabilityImpact'=>'供应的影响',
    'TemporalScoreMetrics'=>'时间分的衡量标准',
    'Exploitability'=>'开采范围',
    'RemediationLevel'=>'补救级',
    'ReportConfidence'=>'报告的建立信任',
    'EnvironmentalScoreMetrics'=>'环境分的衡量标准',
    'CollateralDamagePotential'=>'附带损害的可能',
    'TargetDistribution'=>'目标分配',
    'ConfidentialityRequirement'=>'保密要求',
    'IntegrityRequirement'=>'完整的要求',
    'AvailabilityRequirement'=>'是否要求',
    'UpdateDREADScore'=>'更新恐怖分',
    'DamagePotential'=>'潜在破坏力',
    'Reproducibility'=>'重現性',
    'AffectedUsers'=>'受影响的用户',
    'Discoverability'=>'可發現性',
    'UpdateOWASPScore'=>'更新OWASP分',
    'ThreatAgentFactors'=>'威胁因素的探员',
    'SkillLevel'=>'技能水平',
    'Motive'=>'的动机',
    'Opportunity'=>'机会',
    'Size'=>'规模',
    'VulnerabilityFactors'=>'脆弱性因素',
    'EaseOfDiscovery'=>'容易的发现',
    'EaseOfExploit'=>'便于利用',
    'Awareness'=>'提高认识',
    'IntrusionDetection'=>'入侵探测',
    'TechnicalImpact'=>'技术的影响',
    'LossOfConfidentiality'=>'损失的保密',
    'LossOfIntegrity'=>'损失的完整性',
    'LossOfAvailability'=>'丧失供应',
    'LossOfAccountability'=>'损失的问责制',
    'BusinessImpact'=>'业务影响',
    'FinancialDamage'=>'财务损失',
    'ReputationDamage'=>'声誉损失',
    'NonCompliance'=>'不遵守情事',
    'PrivacyViolation'=>'隐私的侵犯',
    'UpdateCustomScore'=>'更新的习俗分',
    'ManuallyEnteredValue'=>'用手工输的价值',
    'ScoreByClassic'=>'分的经典',
    'ScoreByCVSS'=>'分的CVSS',
    'ScoreByDREAD'=>'分的恐惧',
    'ScoreByOWASP'=>'分的OWASP',
    'ScoreByCustom'=>'分的习俗',
    'BaseVector'=>'基地媒',
    'TemporalVector'=>'病媒的时空',
    'EnvironmentalVector'=>'环境媒介',
    'SupportingDocumentation'=>'辅助文件',
    'Import'=>'进口',
    'Export'=>'出口',
    'ActivateTheImportExportExtra'=>'启动的进口/出口额外',
    'PrintableView'=>'可打印的认为',
    'GroupBy'=>'小组由',
    'IncludedColumns'=>'包括专栏',
    'AllRisks'=>'所有风险',
    'DynamicRiskReport'=>'充满活力的风险报告',
    'ObsoleteReports'=>'过时的报告',
    'Project'=>'项目',
    'SortBy'=>'之类的',
    'MonthSubmitted'=>'一个月提交',
    'AssetManagement'=>'资产管理',
    'AutomatedDiscovery'=>'自动发现',
    'BatchImport'=>'批进口',
    'ManageAssets'=>'管理资产',
    'AssetValuation'=>'资产的估值',
    'AllowAccessToAssetManagementMenu'=>'请允许获得"资产的管理"的菜单',
    'AutomatedDiscoveryHelp'=>'发现生活的IP地址在进入IP范围。 生活的IP地址将增加的资产清单。 可以接受的形式：',
    'IPRange'=>'IP范围',
    'Search'=>'搜查',
    'AddANewAsset'=>'增加新的资产',
    'DeleteAnExistingAsset'=>'删除现有的资产',
    'AssetName'=>'资产的名字',
    'IPAddress'=>'IP地址',
    'AssetWasAddedSuccessfully'=>'资产增加了成功。',
    'AssetWasDeletedSuccessfully'=>'资产删除成功地完成。',
    'ThereWasAProblemAddingTheAsset'=>'有一个问题增加的资产。',
    'ThereWasAProblemDeletingTheAsset'=>'有一个问题删除的资产。',
    'ComingSoon'=>'很快就会来',
    'ExportRisks'=>'出口的风险',
    'ExportMitigations'=>'出口的缓解',
    'ExportReviews'=>'出口审查',
    'ExportCombined'=>'出口结合',
    'MitigatedBy'=>'减轻的',
    'MitigationId'=>'缓解身份证',
    'ReviewId'=>'审查的身份证',
    'AffectedAssets'=>'受影响的资产',
    'Activate'=>'激活',
    'DeleteRisks'=>'删除的危险',
    'DeletedRisksCannotBeRecovered'=>'删除风险无法收回的',
    'RisksDeletedSuccessfully'=>'风险(s)删除成功',
    'ThereWasAProblemDeletingTheRisk'=>'有一个问题删的风险（s)',
    'Activated'=>'启动了',
    'IWantToReviewInsignificantRiskEvery'=>'我想要审查微不足道的风险每',
    'Insignificant'=>'微不足道',
    'IConsiderVeryHighRiskToBeAnythingGreaterThan'=>'我認為很高的風險是什麼大於或等於',
    'IConsiderHighRiskToBeLessThanAboveButGreaterThan'=>'我認為高風險是小於以上, 但大於或等於',
    'VeryHigh'=>'非常高',
    'VeryHighRisk'=>'非常高的风险',
    'IWantToReviewVeryHighRiskEvery'=> '我想审查非常高的风险每',
    'AbleToReviewVeryHighRisks'=>'审查了非常高的风险',
    'AbleToReviewInsignificantRisks'=>'审查了微不足道的风险',
    'TotalVeryHighRisks'=>'总的风险很高',
    'VeryHighRiskPercentage'=>'非常风险很高的百分比',
    'AllTeams'=>'所有小队',
    'FileUploadSettings'=>'文件上传环境',
    'AllowedFileTypes'=>'允许的档案的类型',
    'AddNewFileTypeOf'=>'增加新的档案的类型',
    'DeleteCurrentFileTypeOf'=>'删除目前的档案的类型',
    'MaximumUploadFileSize'=>'最高上载文件大小',
    'Bytes'=>'位元組',
    'CheckAll'=>'检查所有',
    'CheckAllRiskMgmt'=>'检查所有风险管理',
    'CheckAllAssetMgmt'=>'看看所有的资产管理',
    'CheckAllConfigure'=>'检查所有设置',
    'MitigationTeam'=>'缓减小组',
    'ImportRisks'=>'进口危险',
    'ImportAssets'=>'进口的资产',
    'AssetValue'=>'资产的价值',
    'Register'=>'登记册',
    'RegisterSimpleRisk'=>'登记册SimpleRisk',
    'RegistrationText'=>'通过登记SimpleRisk你们将提供你的联络信息所以你可以不断更新最新的资料和重要的安全通知。 你将永远被出售给第三方。 登记的情况下也有能力支持和进行升级，需按一下按钮。',
    'RegistrationInformation'=>'登记资料',
    'Company'=>'公司',
    'JobTitle'=>'工作权',
    'Phone'=>'电话',
    'UpgradeSimpleRisk'=>'提高SimpleRisk',
    'UpgradeInstructions'=>'本节所使用的升级的额外的。 确保你们有没有最新版本的选择"的最新情况"，重新登记和重新装弹页。',
    'NoUpgradeNeeded'=>'没有升级是必要的。',
    'BackupDatabase'=>'备用的数据库',
    'UpgradeApplication'=>'升级的适用',
    'UpgradeDatabase'=>'更新的数据库',
    'CustomExtras'=>'习俗的临时演员',
    'CustomExtrasText'=>'那将是太棒了如果一切都是免费的，对吧？ 希望的核心SimpleRisk纲要》能够成你所有的风险管理的需要。 但如果你发现自己仍有希望得到更多的功能，我们已经制定了一系列的"额外"，将做到这一点。',
    'Upgrade'=>'升级',
    'Install'=>'安装',
    'Purchase'=>'购买',
    'PasswordPolicy'=>'密码政策',
    'MinimumNumberOfCharacters'=>'最低数量的角色',
    'RequireAlphaCharacter'=>'需要烷的角色',
    'RequireUpperCaseCharacter'=>'要求员会第十二届会议的主席总结性',
    'RequireLowerCaseCharacter'=>'需要较低的案件的性质',
    'RequireNumericCharacter'=>'需要的数字的角色',
    'RequireSpecialCharacter'=>'需要特别性质',
    'Enabled'=>'使',
    'RiskPyramid'=>'风险的金字塔',
    'RiskPyramidDescription'=>'风险的金字塔上有助于显示风险分布在不同的风险水平。 一头重脚轻的金字塔也可以是暗示你们的组织正在太多的风险。',
    'RiskAdvice'=>'风险意见',
    'AddDeleteAssets'=>'增加&删除的资产',
    'EditAssets'=>'编辑的资产',
    'AutomaticAssetValuation'=>'自动的资产的估值',
    'ManualAssetValuation'=>'手册的资产的估值',
    'MinimumValue'=>'最低限度的价值',
    'MaximumValue'=>'最大价值',
    'ValueRange'=>'价值范围',
    'DefaultAssetValuation'=>'违约的资产的估值',
    'Default'=>'违约',
    'RisksAndAssets'=>'风险和资产',
    'Report'=>'的报告',
    'RisksByAsset'=>'风险的资产',
    'AssetsByRisk'=>'资产的风险',
    'MaximumQuantitativeLoss'=>'最大数量的损失',
    'MitigationOwner'=>'缓解的主人',
    'MitigationCost'=>'缓解费用',
    'RiskColumns'=>'风险专栏',
    'MitigationColumns'=>'减轻的专栏',
    'ReviewColumns'=>'审查的专栏',
    'ChangeStatus'=>'改变现状',
    'SetRiskStatusTo'=>'确定风险的地位',
    'AddNewStatusNamed'=>'增加新的地位叫',
    'DeleteStatusNamed'=>'删去地位叫',
    'DefaultCurrencySymbol'=>'违货币的象征',
    'DefaultValues'=>'违约后的价值观',
    'RiskSource'=>'风险资料来源',
    'AddNewSourceNamed'=>'增加新的资料来源叫',
    'DeleteSourceNamed'=>'删除来源叫',
    'CheckAllAssessments'=>'检查所有的评估',
    'AllowAccessToAssessmentsMenu'=>'允许接触不在"评估"菜单',
    'Assessments'=>'评估',
    'AvailableAssessments'=>'现有的评估',
    'PendingRisks'=>'等待危险',
    'CreateAssessment'=>'建立评估',
    'EditAssessment'=>'编辑的评估',
    'Overview'=>'概览',
    'OpenVsClosed'=>'公开与非公开',
    'MitigatedVsUnmitigated'=>'减少与不减缓的话',
    'ReviewedVsUnreviewed'=>'审查诉Unreviewed',
    'OpenedRisks'=>'开放的风险',
    'MailSettings'=>'邮件环境下',
    'TransportAgent'=>'运输探员',
    'FromName'=>'从名字',
    'FromEmail'=>'从电子邮件',
    'ReplyToName'=>'ReplyTo的名字',
    'ReplyToEmail'=>'ReplyTo电子邮件',
    'Host'=>'东道国',
    'SMTPAuthentication'=>'SMTP认证',
    'Encryption'=>'加密的',
    'Port'=>'港口',
    'Next'=>'下',
    'NewAssessmentQuestion'=>'新的评估问题',
    'Question'=>'的问题',
    'RiskScore'=>'风险分',
    'SubmitRisk'=>'提交风险',
    'Answer'=>'答案',
    'AddQuestion'=>'增加的问题',
    'SaveAssessment'=>'拯救的评估',
    'SendAssessment'=>'派遣的评估',
    'DeleteAssessment'=>'删除的评估',
    'AssessmentName'=>'评估的名字',
    'SendTo'=>'派对',
    'ActiveAssessments'=>'积极的评估',
    'SentTo'=>'送到',
    'From'=>'从',
    'Key'=>'关键',
    'GoToSSOLoginPage'=>'轉到 SSO 登錄頁',
    'APIKey'=>'API 金鑰',
    'GenerateAPIKey'=>'生成的 API 金鑰',
    'RotateAPIKey'=>'旋轉的 API 金鑰',
    'InvalidateAPIKey'=>'導致對 API 金鑰無效',
    'Deactivate'=>'停用',
    'ImportExportExtra'=>'導入匯出額外',
    'SaveDetails'=>'保存詳細資訊',
    'ClearForm'=>'清除表單',
    'SaveMitigation'=>'保存緩解',
    'Cancel'=>'取消',
    'SubmitReview'=>'提交的評論',
    'UnassignedRisks'=>'未分配的風險',
    'DisableRegistrationNotice'=>'禁用註冊通知',
    'UserPolicy'=>'使用者策略',
    'UseCaseSensitiveValidationOfUsername'=>'使用區分大小寫的使用者名驗證',
    'MitigationPlanning'=>'計畫的緩解措施日期',
    'AssetDetails'=>'資產詳細資訊',
    'RiskList'=>'風險清單',
    'Are you sure you want to close the risk? All changes will be lost!'=>'你確定你想要關閉的風險？所有更改將都會丟失 ！',
    'MinimumPasswordAge' => '最短密碼期限',
    'MaximumPasswordAge' => '密碼最長期限',
    'MaximumAttemptsLockout' => '最大嘗試次數鎖定',
    'MaximumAttemptsLockoutTime' => '最大嘗試次數鎖定時間',
    'attempts' => '嘗試',
    'minutes' => '分鐘',
    'minute' => '分鐘',
    'AccountLockedOut' => '帳戶鎖定',
    'AccountLockoutPolicy' => '帳戶鎖定策略',
    'ImportExportIsDeactivated' => '停用導入匯出',
    'PurchaseTheExtra' => '購買額外的',
    'ExpandAll' => '全部展開',
    'ConditionMessageForMinChar' => '密碼應包含 $min_chars 字元的最小值。',
    'ConditionMessageForAlpha' => '密碼應包含字母字元。',
    'ConditionMessageForUppercase' => '密碼應包含大寫字元。',
    'ConditionMessageForLowercase' => '密碼應該包含小寫字元。',
    'ConditionMessageForDigit' => '密碼應該包含數位。',
    'ConditionMessageForSpecialchar' => '密碼應該包含一個特殊字元。',
    'ConditionMessageForMinPasswordAge' => '密碼可以從更新最後更新時間最少的 $min_password_age 天后。',
    'TrustedDomains' => '受信任的域',
    'SimpleRiskColumnMapping' => 'SimpleRisk 列映射',
    'Mapping' => '映射',
    'Optional' => '可選',
    'SaveMappingAs' => '保存映射為',
    'EncryptionLevel' => '加密級別',
    'Level' => '水準',
    'Description' => '描述',
    'ShowRiskScoreOverTime' => '隨著時間的推移顯示風險評分',
    'HideRiskScoreOverTime' => '隨著時間的推移隱藏風險評分',
    'ReviewRegularlyHelp' => '下面是所有風險按 Unreviewed，逾期的和下一個審查日期進行排序的清單',
    'RiskScoringHistory' => '風險評分歷史',
    'RiskAddPermissionMessage' => '你沒有許可權提交新的風險。 不會記錄您嘗試提交任何風險。 請如果你覺得你已經到達此錯誤訊息，與管理員聯繫。',
    'SubjectRiskCannotBeEmpty' => '風險的主題不能為空',
    'InvalidRiskID' => '風險 ID 無效',
    'Success' => '成功',
    'RiskUpdatePermissionMessage' => '您沒有許可權修改風險。 您試圖修改任何風險將不會被記錄。 請如果你覺得你已經到達此錯誤訊息，與管理員聯繫。',
    'RiskReviewPermission' => '您沒有許可權查看 $risk_level 級風險。 不會記錄您嘗試提交任何評論。 請如果你覺得你已經到達此錯誤訊息，與管理員聯繫。',
    'DateAndTime' => '日期和時間',
    'mCryptWarning' => '"Mcrypt"擴展需要安裝加密額外才能正常工作。 請將其安裝以繼續。',
    'APIInCompatibleWithEncryptionLevel' => 'API 是不相容的加密資料庫額外的使用者加密級別。',
    'UnauthenticatedAccessInAPI' => '未經身份驗證的訪問。 請登錄或提供要使用 SimpleRisk API 金鑰。',
    'ResetPasswordMessageInUserLevelEncryption' => '你不可以重置密碼，因為此使用者是在使用者級別的加密。請與管理員聯繫。',
    'YouNeedToSpecifyAnIdParameter' => '您需要指定 id 參數。',
    'NoMitigation' => '沒有指定的緩解。',
    'NoReview' => '沒有指定的審查。',
    'MysqldumpPathWasSavedSuccessfully' => '成功保存了 Mysqldump 路徑。',
    'UnavailableMysqldumpService' => '伺服器上沒有繳費 \'了 mysqldump\' 服務。請設置絕對了 mysqldump 服務路徑。',
    'AllOpenRisksByTeamByLevel' => '所有打開的團隊由風險水準風險',
    'Unknown' => '未知',
    'AllOwners' =>'所有風險',
    'AllOwnersManagers' => '所有業主經理',
    'AddNewReviewNamed' => '添加新命名的審查',
    'DeleteCurrentReviewNamed' => '刪除當前審查命名',
    'AddNewNextstepNamed' => '添加新的下一步',
    'DeleteCurrentNextstepNamed' => '刪除當前的下一步，名為',
    'Settings' => '設置',
    'EnablePopupWindowsForTextBoxes' => '使文字方塊中的快顯視窗',
    'PasswordNoLongerUse' => '這個新密碼是有限的所以你不能再使用。 請嘗試另一個密碼',
    'RememberTheLast' => '記得最後',
    'Passwords' => '密碼',
    'NoOwner' => '沒有擁有者',
    'NoOwnersManager' => '沒有業主經理',
    'RiskAverageOverTime' => '隨著時間的推移風險平均',
    'AverageRiskScore' => '平均風險評分',
    'Year' => '一年',
    'Month' => '個月',
    'Day' => '一天',
    'FilterByAffectedAsset' => '受影響的資產按篩選',
    'RisksOpened' => '打開的風險',
    'RisksClosed' => '關閉的風險',
    'HealthCheck' => '健康檢查',
    'RequirePasswordChangeOnLogin' => '需要登錄的密碼更改',
    'PasswordChangeRequired' => '您需要更改您的密碼，在登錄之前。',
    'LikelihoodImpact' => '可能性和影響',
    'MitigationPercent' => '緩解 %',
    'MitigationPermissionMessage' => '您沒有許可權來計畫緩解措施。 不會記錄您嘗試提交任何緩解。 請如果你覺得你已經到達此錯誤訊息，與管理員聯繫。',
    'ResetCustomDisplaySettings' => '重置自訂顯示設定',
    'CustomResetSuccessMessage' => '您的自訂顯示設定已成功重置',
    'DefaultRiskScore' => '違約風險評分',
    'AdditionalStakeholders' => '其他利益相關者',
    'AllSkateholders' => '所有利益攸關者',
    'RiskIdDoesNotExist' => '風險 ID 不存在',
    'RiskDisplayPermission' => '您無權查看此風險。請與伺服器管理員聯繫。',
    'AllowOwnerToSeeRiskDetails' => '允許擁有者查看風險詳細資訊',
    'AllowOwnerManagerToSeeRiskDetails' => '允許擁有者經理查看風險詳細資訊',
    'AllowRiskSubmitterToSeeRiskDetails' => '允許風險提交者查看風險詳細資訊',
    'AllowTeamMembersToSeeRiskDetails' => '允許工作組成員查看風險詳細資訊',
    'AllowAdditionalStakeholdersToSeeRiskDetails' => '允許其他專案關係人查看風險詳細資訊',
    'SavedSuccess' => '已成功保存。',
    'DeletedMappingSuccess' => '已成功刪除映射。',
    'SelectMappingToRemove' => '請選擇要刪除的映射。',
    'Schedule' => '計畫',
    'Daily' => '每日',
    'Weekly' => '每週',
    'Monthly' => '每月',
    'Quarterly' => '季度',
    'Annually' => '每年',
    'SpecifiedTime' => '指定時間',
    'Governance' => '治理',
    'Compliance' => '遵守',
    'AllowAccessToRiskManagementMenu' => '允許訪問 "風險管理" 功能表',
    'CheckAllGovernance' => '檢查所有治理',
    'CheckAllCompliance' => '檢查所有法規遵從性',
    'AllowAccessToGovernanceMenu' => '允許訪問 "治理" 功能表',
    'AllowAccessToComplianceMenu' => '允許訪問 "法規遵從性" 功能表',
    'DefineControlFrameworks' => '定義控制框架',
    'CurrentProjects' => '當前專案',
    'Frameworks' => '框架',
    'Controls' => '控制項',
    'ActiveProjects' => '活動專案',
    'OnHoldProjects' => '擱置專案',
    'CompletedProjects' => '已完成的專案',
    'CanceledProjects' => '已取消專案',
    'Priority' => '優先',
    'ProjectName' => '專案名稱',
    'ActiveFrameworks' => '活動框架',
    'InactiveFrameworks' => '非活動框架',
    'NewProjectName' => '新專案名稱',
    'NewFrameworkName' => '新框架名稱',
    'NewFrameworkDescription' => '新框架說明',
    'AreYouSureYouWantToDeleteThisProject' => '是否確實要刪除此專案？',
    'AreYouSureYouWantToDeleteThisFramework' => '是否確實要刪除此框架？',
    'ViewRisks' => '查看風險',
    'ViewRisk' => '查看風險',
    'FrameworkName' => '框架名稱',
    'FrameworkDescription' => '框架描述',
    'ImportAssessments' => '進口評估',
    'ExportAssessment' => '出口評估',
    'AssessmentSuccessImport' => '成功導入評估',
    'AssessmentFileRequired' => '評估 CSV 檔是必需的',
    'FrameworkUpdated' => '已成功更新框架。',
    'UpdateAll' => '更新所有',
    'SelectAssessmentToExport' => '選擇要匯出的評估。',
    'PageTemplates' => '頁面範本',
    'CustomFields' => '自訂欄位',
    'AddACustomField' => '添加自訂域',
    'FieldName' => '欄位名稱',
    'FieldType' => '欄位類型',
    'CustomFieldNameNotEmpty' => '自訂域的名稱不能為空。',
    'DeletedSuccess' => '成功刪除',
    'ActiveControls' => '活動控制項',
    'ControlName' => '控制項名稱',
    'ControlShortName' => '控制短名稱',
    'ControlLongName' => '控制長名稱',
    'ControlDescription' => '控制說明',
    'SupplementalGuidance' => '補充指南',
    'ControlFramework' => '控制框架',
    'ControlFrameworks' => '控制框架',
    'ControlOwner' => '控制項擁有者',
    'ControlClass' => '控制項類',
    'ControlPhase' => '控制階段',
    'ControlNumber' => '控制編號',
    'ControlPriority' => '控制優先順序',
    'ControlFamily' => '控制系列',
    'AllFrameworks'=>'所有框架',
    'NewControlName' => '新控制項名稱',
    'NewControlDescription' => '新控制項說明',
    'AreYouSureYouWantToDeleteThisControl' => '確實要刪除此控制項嗎？',
    'AddNewControlClassNamed' => '添加名為',
    'DeleteCurrentControlClassNamed' => '刪除名為',
    'AddNewControlPhaseNamed' => '添加新的控制項階段名為',
    'DeleteCurrentControlPhaseNamed' => '刪除指定的當前控制項階段',
    'AddNewControlPriorityNamed' => '添加新控制項優先順序命名',
    'DeleteCurrentControlPriorityNamed' => '刪除指定的當前控制項優先順序',
    'AddNewControlFamilyNamed' => '添加新控制項族名',
    'DeleteCurrentControlFamilyNamed' => '刪除當前控制項族名',
    'MinutesAssessmentsAreValid' => '分鐘評估有效',
    'ShowAvailableAssetsOnAssessments' => '在評估時顯示可用資產',
    'AssessmentSettingsUpdatedSuccessfully' => '已成功更新評估設置。',
    'UseCommasToSeperateMultipleEmails' => '使用逗號分隔多個電子郵件。',
    'RiskAssessmentQuestionnaire' => '風險評估問卷',
    'EmailTemplateSendingAssessment' => '<html><body> \\n 您好, \\n <p> {$username} 已 aksed 您完成以下風險評估 questionnaire:</p>\\n <p><a href="{$assessment_link}"> {$assessment_name} </a></p> \\n <p>This 是自動消息, 回應將被忽略或拒絕. </p> </body></html>',
    'FilterByText' => '按文本篩選',
    'SelectMitigatingControls' => '選擇緩解控制 (s)',
    'MitigationControls' => '緩解措施',
    'EnableTLSEncryptionAutomaticallyIfAServerSupportsIt' => '如果伺服器支援 TLS 加密, 則自動啟用',
    'AssessmentContacts' => '評估連絡人',
    'Name' => '名稱',
    'ContactManager' => '聯繫經理',
    'AddNewAssessmentContact' => '添加新的評估連絡人',
    'UpdateAssessmentContact' => '更新評估連絡人',
    'AssessmentContactCreated' => '創建了新的評估連絡人',
    'AssessmentContactUpdated' => '評估連絡人已更新',
    'InvalidInformations' => '無效資訊',
    'AreYouSureYouWantToDeleteThisContact' => '是否確實要刪除此連絡人？',
    'ImportAssessmentContacts' => '進口評估連絡人',
    'ImportCsvXlsFile' => '將以下 CSV 或 XLS 檔導入 SimpleRisk',
    'AssessmentContactsImported' => '導入的評估連絡人',
    'DefineTests' => '定義測試',
    'AddTest' => '添加測試',
    'Tester' => '測試',
    'TestFrequency' => '測試頻率',
    'Objective' => '目的',
    'TestSteps' => '測試步驟',
    'LastTestDate' => '上次測試日期',
    'NextTestDate' => '下一個測試日期',
    'ApproximateTime' => '近似時間',
    'ExpectedResults' => '預期結果',
    'ControlID' => '控制項 ID',
    'TestSuccessCreated' => '已成功創建測試。',
    'TestSuccessUpdated' => '測試已成功更新。',
    'QuestionnaireQuestions' => '問卷問題',
    'AreYouSureYouWantToDeleteThisQuestion' => '是否確實要刪除此問題？',
    'NewQuestionnaireQuestion' => '新的調查表問題',
    'EditQuestionnaireQuestion' => '編輯調查表問題',
    'Answers' => '答案',
    'InvalidQuestionOrAnswers' => '不正確問題或答案。',
    'SuccessTestDeleted'=>'測試已成功刪除',
    'AreYouSureYouWantToDeleteThisTest'=>'確實要刪除此測試嗎？',
    'ImportAssessmentQuestionnaireQuestions'=>'進口評估問卷問題',
    'QuestionAndAnswersRquired'=>'問題和答案都是必需的。',
    'AssessmentQuestionnaireQuestionsAndAnwersImported'=>'成功導入評估問卷問題和答案。',
    'QuestionnaireTemplates'=>'調查表範本',
    'AreYouSureYouWantToDeleteThisTemplate'=>'確實要刪除此範本嗎？',
    'NewQuestionnaireTemplate'=>'新建調查表範本',
    'Questions'=>'問題',
    'TemplateNameRequired'=>'範本名稱是必需的。',
    'EditQuestionnaireTemplate'=>'編輯調查表範本',
    'InitiateAudits'=>'啟動審核',
    'TestName'=>'測試名稱',
    'ParentFramework'=>'父框架',
    'LastAuditDate'=>'上次審核日期',
    'NextAuditDate'=>'下一次審核日期',
    'DesiredFrequency'=>'所需頻率',
    'Framework'=>'框架',
    'Control'=>'控制',
    'Test'=>'測試',
    'Active'=>'活動',
    'Inactive'=>'活動',
    'InitiateFrameworkAudit'=>'啟動框架審核',
    'InitiateControlAudit'=>'啟動控制審核',
    'InitiateTest'=>'啟動測試',
    'Questionnaires'=>'問卷',
    'AreYouSureYouWantToDeleteThisQestionnaire' => '是否確實要刪除此調查表？',
    'NewQuestionnaire'=>'新調查表',
    'EditQuestionnaire'=>'編輯調查表',
    'Template'=>'範本',
    'Save'=>'保存',
    'DuplicatedQuestionnaireName'=>'重複的調查表名稱。',
    'QuestionnaireNameRequired'=>'需要調查表名稱。',
    'InitiatedAllTestsUnderFramework'=>'啟動了框架下的所有測試 $framework',
    'InitiatedAllTestsUnderControl'=>'已啟動控制下的所有測試 $control',
    'InitiatedTest'=>'開始測試, $test',
    'SentQuestionnaire'=>'已成功向每個連絡人發送了調查表。',
    'SetPassword'=>'設置密碼',
    'NoMatchPassword'=>'密碼應匹配。',
    'SetPasswordSuccess'=>'已成功設置密碼。',
    'InvalidPassword'=>'密碼無效',
    'InvalidTokenForQuestionnaire'=>'您需要有效的權杖才能顯示調查表。',
    'RequiredTokenForQuestionnaire'=>'您需要發送一個權杖以顯示調查表。',
    'NoPermissionForQuestionnaire'=>'您沒有此調查表的許可權。',
    'NoPermissionForTemplate'=>'您沒有此範本的許可權。',
    'RunNow'=>'立即運行',
    'ActiveAudits'=>'活動審計',
    'Questionnaire'=>'問卷',
    'Draft'=>'草案',
    'Complete'=>'完成',
    'AdditionalInformation'=>'其他資訊',
    'Clear'=>'明確',
    'PendingEvidenceFromControlOwner'=>'來自控制擁有者的未決證據',
    'EvidenceSubmittedPendingReview'=>'提交的證據/待定審查',
    'PassedInternalQA'=>'通過內部 QA',
    'RemediationRequired'=>'需要補救',
    'Closed'=>'關閉',
    'TestResult'=>'測試結果',
    'Summary'=>'摘要',
    'TestDate'=>'測試日期',
    'Attachment'=>'附件',
    'InvalidParams'=>'參數無效',
    'ClearForm'=>'清除表單',
    'QuestionnaireDraftSuccess'=>'您的答案已成功保存。',
    'QuestionnaireCompletedSuccess'=>'您已成功完成此調查表。',
    'EmailTemplateCompleteQuestionnaire' => '<html><body> \\n 你好, \\n <p> {$conact_name} 完成了調查表, <b>{$questionnaire_name}</b></p> \\n <p>This 是自動消息, 回應將被忽略或拒絕. </p>
        </body></html>',
    'QuestionnaireResults'=>'問卷調查結果',
    'DateSent'=>'發送日期',
    'Contact'=>'聯繫',
    'PercentCompleted'=>'完成百分比',
    'Incomplete'=>'不',
    'Completed'=>'完成',
    'QuestionnaireName'=>'調查表名稱',
    'QuestionnaireHasNoContacts'=>'此調查表沒有連絡人, 因此無法發送。',
    'FrameworkAdded'=>'已成功添加新框架。',
    'FrameworkUpdated'=>'已成功更新框架。',
    'FrameworkNameExist'=>'框架名稱已存在。',
    'AttachmentFiles'=>'附件檔',
    'QuestionnaireFiles'=>'調查表檔',
    'ContactEmailAlreadyInUse'=>'連絡人電子郵件已在使用中。',
    'InherentRisk'=>'固有風險',
    'ResidualRisk'=>'剩餘風險',
    'PastAudits'=>'過去審計',
    'AuditDate'=>'審核日期',
    'Reopen'=>'重新',
    'CreatedDate'=>'創建日期',
    'QuestionnaireAuditTrail'=>'調查表審核跟蹤',
    'SelectYourControlFrameworks'=>'選擇您的控制框架',
    'AllFrameworks'=>'所有框架',
    'QuestionnaireAlreadySent'=>'已發送此調查表, 因此您無法更新此調查表。',
    'SelectAll' => '全部選擇',
    'TestStatus' => '測試狀態',
    'DeleteCurrentStatusNamed' => '刪除名為的目前狀態',
    'AuditStatus' => '審核狀態',
    'TheClosedStatusCantBeDeleted' => '無法刪除已關閉的狀態。',
    'AuditStatusDeleted' => '已成功刪除審核狀態。',
    'HasFile' => '有檔',
    'ClosedAuditStatus' => '關閉的審核狀態',
    'ClosedAuditStatusIsRequired' => '需要關閉審核狀態',
    'UserInterface' => '使用者介面',
    'DefaultValues' => '預設值',
    'DefaultLanguage' => '預設語言',
    'DefaultTimezone' => '預設時區',
    'UserSessions' => '使用者會話',
    'SessionActivityTimeout' => '會話活動超時',
    'SessionRenegotiationPeriod' => '會話重新協商期間',
    'Security' => '安全',
    'EnableCSP' => '啟用內容安全性原則 (這在過去已經打破了 Chrome)',
    'Debugging' => '調試',
    'EnableDebugLogging' => '啟用調試日誌記錄',
    'DebugLogFile' => '調試日誌檔',
    'seconds' => '秒',
    'FieldSample' => '欄位示例',
    'StartDate' => '開始日期',
    'EndDate' => '結束日期',
    'DefaultClosedAuditStatus' => '預設關閉審核狀態',
    'AutomatedNotificationsOfUnreviewedPastDueRisks' => '自動通知一同/過去應承擔的風險',
    'SimpleRiskActionNotifications' => 'SimpleRisk 操作通知',
    'WhenToNotify' => '何時通知',
    'WhoToNotify' => '誰通知',
    'HowToNotify' => '如何通知',
    'NotifyOnNewRisk' => '新風險通知',
    'NotifyOnRiskUpdate' => '通知風險更新',
    'NotifyOnNewMitigation' => '通知新的緩解措施',
    'NotifyOnMitigationUpdate' => '通知緩解更新',
    'NotifyOnRiskReview' => '風險評估通知',
    'NotifyOnRiskClose' => '關閉風險通知',
    'NotifyOnRiskComment' => '通知風險注釋',
    'NotifySubmitter' => '通知提交者',
    'NotifyOwner' => '通知擁有者',
    'NotifyOwnersManager' => '通知擁有者經理',
    'NotifyTeam' => '通知團隊',
    'NotifyAdditionalStakeholders' => '通知其他專案關係人',
    'NotifyReviewers' => '通知檢閱者',
    'VerboseEmails' => '詳細電子郵件',
    'SimpleRiskURL' => 'SimpleRisk 網址',
    'Period' => '期間',
    'PlaceTheFollowingInYourCrontabToRunAutomatically' => '將以下內容放在您的 crontab 中以自動運行',
    'SimpleRiskScheduledNotifications' => 'SimpleRisk 計畫的通知',
    'AutomatedNotificationsOfAudits' => '自動審計通知',
    'SendAnEmail' => '發送電子郵件',
    'SendAnEmailEvery' => '發送電子郵件每',
    'DaysBeforeTheAuditIsDue' => '審核到期前的天數',
    'DaysAfterTheAuditIsDue' => '審核到期後的天數',
    'SendAnEmailWhenTheAuditIsDue' => '當審核到期時發送電子郵件',
    'PendingRiskDeleted' => '已成功刪除掛起的風險',
    'RunAt' => '跑在',
    'ImportControls' => '導入控制項',
    'RiskIDNoEXitFailedToUpdate' => '風險 ID $risk_id 不存在, 因此失敗更新',
    'CreatedRisksFromPendingRisks' => '從未決風險中創建了所有風險。',
    'AddAll' => '添加所有',
    'SendingPleaseWait' => '發送.請稍候。',
    'SelectForMitigationControls' => '選擇用於緩解控制',
    'QuestionnaireTemplateName' => '調查表範本名稱',
    'QuestionnaireName' => '調查表名稱',
    'Ordering' => '訂購',
    'AuditsDueToday' => '今天到期的審計',
    'AuditsPastDue' => '審核通過到期',
    'AuditsDueSoon' => '即將到期的審計',
    'DateDue' => '到期日期',
    'ShowAllRisksForPlanProjects' => '顯示計畫專案的所有風險, 而不是僅查看 "考慮專案"',
    '' => '',
);

?>
