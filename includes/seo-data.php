<?php
/**
 * Page copy from contents/AIT_SEO_AEO_GEO_Combined.docx.
 *
 * Keyed by page slug (the .php filename without its extension). Each entry
 * carries the title tag, meta description, H1, opening paragraph, the H2
 * sections, and the FAQ pairs — so the copy stays in one place that can be
 * diffed against the source document, and the FAQPage schema can be generated
 * from the same text that appears on the page.
 *
 * Optional keys: 'lead_more' is a second opening paragraph, 'sub' a short
 * subheading under the H1. Only pages that print them use them.
 *
 * Pages left out here keep whatever meta they already set for themselves.
 */

$SEO_PAGES = [

'index' => [
  'title' => 'Technology Services &amp; Talent Solutions | Adhiran Infotech',
  'desc'  => 'Adhiran Infotech is a staffing agency in Chennai. Hire developers and tech teams across India with staff augmentation and GCC talent. Shortlist in 24 hours.',
  'h1'    => 'Hire Developers and Tech Talent in Chennai and India',
  'lead'  => 'Adhiran Infotech is a technology services and talent solutions company helping global organizations build, scale, and transform their technology capabilities through software engineering, AI &amp; data, cloud, enterprise platforms, project delivery, staff augmentation, and dedicated offshore teams.',
  'lead_more' => 'From individual technology professionals to fully managed project teams, we provide flexible engagement models tailored to business needs across the US, Singapore, Japan, UAE, and other global markets.',
  'sections' => [
    ['Hire Developers in Chennai and India', 'Adhiran Infotech recruits developers in Chennai, where its own team interviews and screens candidates directly, and across India, for companies that want a wider search or a hard-to-find skill such as SAP, ServiceNow, or Veeva. Every candidate goes through the same screening, in Chennai or anywhere else in India, so the shortlist you receive is consistent either way.'],
    ['Three Ways to Work With Adhiran', 'Staff augmentation adds individual specialists to your current team. A dedicated team is a separate offshore team that works only on your projects. GCC talent solutions help you staff your own Global Capability Center in India.'],
    ['Technology Talent We Provide', 'Adhiran places software engineers, AI and machine learning specialists, data engineers, cloud and DevOps engineers, QA and test automation engineers, and enterprise platform consultants for SAP, ServiceNow, and Veeva.'],
  ],
  'faqs' => [
    ['Where can I hire developers in India?', 'You can hire developers in India through Adhiran Infotech, a staffing agency based in Chennai. Adhiran sources, screens, and shortlists developers in Chennai and across India, usually within 24 hours of your request.'],
    ['Can I hire developers in Chennai specifically?', 'Yes. Adhiran Infotech is headquartered in Chennai and recruits Chennai-based developers directly, for staff augmentation or for a full dedicated team.'],
    ['What does Adhiran Infotech do?', 'Adhiran Infotech is a technology services and talent solutions company providing software engineering, AI &amp; data, cloud, enterprise technology, project delivery, staff augmentation, dedicated teams, and GCC talent solutions for global organizations.'],
    ['How fast can Adhiran Infotech shortlist candidates?', 'Adhiran typically delivers a first shortlist of vetted candidates within 24 hours of a request.'],
    ['Does Adhiran Infotech only work with companies in India?', 'No. Most clients are international companies in the US, Singapore, Japan, and Dubai that want to build technology teams in Chennai and India without opening a local office.'],
  ],
],

'gcc-talent' => [
  'title' => 'GCC Talent Solutions Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Build your Global Capability Center in Chennai or elsewhere in India. Adhiran Infotech sources engineering, AI, cloud, QA and SAP talent for GCC teams.',
  'h1'    => 'Build Your GCC Team in Chennai and India',
  'lead'  => 'A Global Capability Center (GCC) is a company-owned offshore hub in India that runs technology, operations, or R&amp;D work in-house instead of outsourcing it. Adhiran Infotech, based in Chennai, sources and shortlists talent for GCCs in Chennai and across India, so companies do not have to build a recruitment operation before their first hire.',
  'sections' => [
    ['Building a GCC in Chennai and India', 'Chennai gives a new GCC a deep pool of engineers, data specialists, and enterprise platform consultants, plus working hours that overlap with Dubai, Singapore, and Japan, and Adhiran handles the early hiring wave while the entity, office, and processes are still being set up. As the GCC grows beyond one city, or needs a skill that is easier to find elsewhere in India, Adhiran sources those roles too under the same screening standard, keeping a multi-city team consistent.'],
    ['Technology Functions We Cover for GCCs', 'Adhiran places GCC talent in software engineering, full-stack development, AI and machine learning, generative and agentic AI, data engineering and data science, cloud and DevOps, cybersecurity, QA and test automation, and enterprise platforms including Salesforce, ServiceNow, SAP, and Oracle.'],
  ],
  'faqs' => [
    ['What is a GCC (Global Capability Center)?', 'A GCC is an offshore center that a company owns and runs in India to handle technology, operations, or R&amp;D work in-house rather than outsourcing it.'],
    ['Why set up a GCC in Chennai?', 'Chennai offers a large technical talent pool and time-zone overlap with Dubai, Singapore, and Japan, which makes daily coordination with headquarters practical.'],
    ['Can Adhiran staff a GCC outside Chennai?', 'Yes. Adhiran sources for GCC roles in Chennai and across India and applies the same screening to every candidate.'],
    ['How is GCC staffing different from staff augmentation?', 'GCC staffing builds your own long-term team in India. Staff augmentation fills specific gaps in an existing team, usually for a shorter period.'],
  ],
],

'talent-solutions' => [
  'title' => 'Staff Augmentation in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Scale your team with staff augmentation in Chennai and across India. Adhiran Infotech shortlists vetted developers, engineers and consultants in 24 hours.',
  'h1'    => 'Staff Augmentation in Chennai and India',
  'lead'  => 'Staff augmentation means adding vetted specialists to your existing team without hiring them directly. Adhiran Infotech provides staff augmentation in Chennai and across India, shortlisting developers, engineers, and consultants for a single role or a full team, usually within 24 hours.',
  'sections' => [
    ['Staff Augmentation in Chennai and India', 'Adhiran’s Chennai recruiters screen candidates against your exact role requirements in hours that overlap with Dubai, Singapore, and Japan, and for roles that are hard to fill in one city, the same search widens across India with remote or hybrid placement. Either way you interview and choose from one shortlist, screened to the same standard.'],
    ['Roles We Staff', 'Adhiran augments teams in software engineering (Java, .NET, Python, React, Node.js), cloud and DevOps (AWS, Azure), enterprise platforms (SAP, ServiceNow), AI and data, and QA, either one person at a time or as part of a larger build.'],
  ],
  'faqs' => [
    ['What is staff augmentation?', 'Staff augmentation is hiring individual specialists to work alongside your current team without running the hiring process yourself. Adhiran sources and screens the candidates, and you select and manage them.'],
    ['Where can I find staff augmentation services in India?', 'Adhiran Infotech provides staff augmentation in Chennai and across India, with a first shortlist usually delivered within 24 hours.'],
    ['How is staff augmentation different from a dedicated team?', 'Staff augmentation adds individuals to your existing team structure. A dedicated team is a separate offshore team that works only on your projects and is managed as its own unit.'],
  ],
],

'hire-java-developer' => [
  'title' => 'Hire Java Developers in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire Java developers in Chennai and across India. Spring, microservices and enterprise Java talent for staff augmentation or dedicated teams. 24-hr shortlist.',
  'h1'    => 'Hire Java Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech helps companies hire Java developers in Chennai and across India, either as individual staff augmentation or as a dedicated team. Candidates are screened for core Java and for the frameworks your project uses, such as Spring, Hibernate, and microservices, with a first shortlist usually ready within 24 hours.',
  'sections' => [
    ['Hire Java Developers in Chennai and India', 'Chennai has a large base of experienced Java engineers, many with years of enterprise banking and insurance work, interviewed directly by Adhiran’s local recruiters. For a Java architect or a rarer combination of skills, the same technical screening extends across India, so you see only candidates who match your framework and seniority requirements, whatever city they work from.'],
    ['Staff Augmentation or a Dedicated Java Team', 'Staff augmentation adds individual Java developers to a team you already run, which is the fastest way to close a capacity gap. A dedicated Java team works only on your codebase and suits longer programs.'],
  ],
  'faqs' => [
    ['How do I hire a Java developer in Chennai?', 'Send Adhiran Infotech your role, framework, and seniority requirements, and its Chennai team will screen candidates and deliver a shortlist, usually within 24 hours. You then interview and select.'],
    ['Where can I hire Java developers in India?', 'Adhiran Infotech provides Java developers from Chennai and across India, on a staff augmentation or dedicated team basis.'],
    ['How much does it cost to hire a Java developer through Adhiran Infotech?', 'Cost depends on seniority and on whether you choose staff augmentation or a dedicated team. Share your requirements with Adhiran to receive a quote.'],
  ],
],

'ai' => [
  'title' => 'Hire AI &amp; ML Developers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire AI and machine learning developers in Chennai and across India for GenAI, LLM and ML projects. Vetted specialists, 24-hour shortlist.',
  'h1'    => 'Hire AI and Machine Learning Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides AI and machine learning developers in Chennai and across India for GenAI, agentic AI, and traditional ML projects. Candidates are screened on applied ML experience and on your stack, such as Python ML frameworks, LLM integration, and MLOps, with a shortlist usually ready in 24 hours.',
  'sections' => [
    ['AI and Machine Learning Developers in Chennai and India', 'Chennai-based AI developers can add capacity to an existing team or build features from scratch, checked on which models they have shipped to production. For research-heavy or highly specialised work, Adhiran also searches across India and can assemble a full offshore AI team when the project needs one.'],
    ['Individual Specialists or a Full AI Team', 'Hire a single machine learning developer for a specific gap, or a dedicated AI team covering data preparation, model development, and deployment.'],
  ],
  'faqs' => [
    ['How do I hire an AI developer in Chennai?', 'Send Adhiran Infotech your use case and stack. Its Chennai team will screen candidates and send a shortlist, usually within 24 hours.'],
    ['Where can I hire machine learning developers in India?', 'Adhiran Infotech provides machine learning developers from Chennai and across India, individually or as a team.'],
    ['What AI skills can you staff?', 'Machine learning model development, natural language processing, and generative and agentic AI, matched to your stack.'],
  ],
],

'hire-dotnet-developer' => [
  'title' => 'Hire .NET Developers in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire .NET developers in Chennai and across India for enterprise apps, legacy support and .NET Core migration. Shortlist within 24 hours.',
  'h1'    => 'Hire .NET Developers in Chennai and India',
  'lead'  => 'Most companies looking for .NET developers already run a .NET system they need to extend, support, or modernize. Adhiran Infotech provides .NET developers in Chennai and across India who are screened for legacy framework experience and .NET Core migration, with a shortlist typically ready within 24 hours.',
  'sections' => [
    ['Hire .NET Developers in Chennai and India', 'Chennai has many developers who have worked on enterprise .NET systems for banks, insurers, and manufacturers, interviewed locally for enterprise deployment practices as well as C# skill. For a large migration from .NET Framework to modern .NET, Adhiran can assemble several developers with specific migration experience from across India under the same screening standard.'],
    ['Legacy Support and Modernization Together', 'Many .NET estates need day-to-day support while a migration runs in parallel. Adhiran places developers comfortable in both environments, so you do not need two separate hires.'],
  ],
  'faqs' => [
    ['How do I hire a .NET developer in Chennai?', 'Share your .NET version, the type of system, and the seniority you need with Adhiran Infotech. Its Chennai team will shortlist matching candidates, usually within 24 hours.'],
    ['Where can I hire .NET developers in India?', 'Adhiran Infotech supplies .NET developers from Chennai and across India for support, new development, or migration projects.'],
    ['Do you supply .NET developers for legacy maintenance?', 'Yes. Adhiran staffs legacy .NET support as well as new .NET Core development.'],
  ],
],

'hire-python-developer' => [
  'title' => 'Hire Python Developers in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire Python developers in Chennai and across India for backend, data or AI projects. Django, FastAPI and pandas talent, shortlisted in 24 hours.',
  'h1'    => 'Hire Python Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech helps companies hire Python developers in Chennai and across India for backend, data, and AI work. Because a backend Python developer and a data Python developer have different skills, Adhiran asks which one you need before it builds the shortlist.',
  'sections' => [
    ['Hire Python Developers in Chennai and India', 'Chennai-based Python developers are available for backend roles using Django or FastAPI, and for data roles using pandas and NumPy, screened locally on production experience rather than tutorials or certificates. For machine learning support or specialised data pipeline work, the same search extends across India, keeping the shortlist small because candidates are matched to your stack before you see them.'],
    ['Backend Python or Data Python', 'Backend roles are screened on API design and scaling. Data-adjacent roles are screened on modeling and pipeline work, and are cross-checked against the <a href="ai">AI and Machine Learning</a> and <a href="hire-data-science-developer">Data Analytics</a> talent pools.'],
  ],
  'faqs' => [
    ['How do I hire a Python developer in Chennai?', 'Tell Adhiran Infotech whether you need backend or data Python skills, plus your framework and seniority. Its Chennai team screens candidates and sends a shortlist, typically within 24 hours.'],
    ['Where can I hire Python developers in India?', 'Adhiran Infotech provides Python developers from Chennai and across India, either as individuals or as part of a dedicated team.'],
    ['Can one Python developer do both backend and data work?', 'Rarely. They are different specialisations, so Adhiran shortlists for the one you actually need.'],
  ],
],

'hire-react-developer' => [
  'title' => 'Hire React Developers in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire React developers in Chennai and across India for new frontends, UI migrations and React Native apps. Vetted talent, 24-hour shortlist.',
  'h1'    => 'Hire React Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech helps companies hire React developers in Chennai and across India for new interfaces and for replacing older frontends. Because greenfield builds and migrations need different strengths, Adhiran asks which one you are doing and shortlists to match, usually within 24 hours.',
  'sections' => [
    ['Hire React Developers in Chennai and India', 'Chennai-based React developers can join your team in hours that overlap with Dubai, Singapore, and Japan, reviewed on whether they have made component and state decisions independently. If your product also needs React Native for mobile, or a front-end lead with design-system experience, the same technical review extends across the rest of India.'],
    ['New Builds and Legacy Migrations', 'New builds reward architecture skill. Migrations from older jQuery or template-based frontends reward patience with gradual rollout. Adhiran flags this difference during screening, so the developer suits the kind of work you have.'],
  ],
  'faqs' => [
    ['How do I hire a React developer in Chennai?', 'Tell Adhiran Infotech if the work is a new build or a migration, and what seniority you need. Its Chennai recruiters review code and portfolios and send a shortlist, usually within a day.'],
    ['Where can I hire React developers in India?', 'Adhiran Infotech provides React and React Native developers from Chennai and across India.'],
    ['Can Adhiran provide React Native developers as well?', 'Yes. Mention mobile in your request and candidates are screened for React Native experience alongside web React.'],
  ],
],

'hire-nodejs-developer' => [
  'title' => 'Hire Node.js Developers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire Node.js developers in Chennai and across India for APIs, microservices and real-time apps. Express and NestJS talent, shortlisted in 24 hours.',
  'h1'    => 'Hire Node.js Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides Node.js developers in Chennai and across India for API, microservices, and real-time systems. Because REST API work and websocket-heavy real-time work call for different experience, Adhiran asks about your use case first and shortlists to match, usually within 24 hours.',
  'sections' => [
    ['Hire Node.js Developers in Chennai and India', 'Adhiran’s Chennai team screens Node.js candidates on Express or NestJS and how they have handled production errors, not only tutorial-level projects. Real-time and event-driven work is a narrower skill set, so for that specific need the search extends across India for candidates with websocket and event-loop experience.'],
    ['APIs and Microservices or Real-Time Systems', 'Most Node.js hiring is for backend APIs and microservices. Chat, live dashboards, and event-driven products need different depth, so say so in your request.'],
  ],
  'faqs' => [
    ['How do I hire a Node.js developer in Chennai?', 'Send Adhiran Infotech your use case, framework, and seniority. The Chennai team will screen candidates and deliver a shortlist within about 24 hours.'],
    ['Where can I hire Node.js developers in India?', 'Adhiran Infotech supplies Node.js developers from Chennai and across India, individually or as a team.'],
    ['Do you staff Node.js developers for real-time applications?', 'Yes, but state this upfront, since real-time experience is a narrower skill set than general API work.'],
  ],
],

'hire-devops-engineer' => [
  'title' => 'Hire DevOps Engineers in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire DevOps engineers in Chennai and across India for CI/CD pipelines, infrastructure as code and cloud operations. Shortlist within 24 hours.',
  'h1'    => 'Hire DevOps Engineers in Chennai and India',
  'lead'  => 'Adhiran Infotech helps companies hire DevOps engineers in Chennai and across India. DevOps is not one role: building pipelines, managing infrastructure as code, and running cloud operations need different depth, so Adhiran asks which you need before shortlisting.',
  'sections' => [
    ['Hire DevOps Engineers in Chennai and India', 'Chennai-based DevOps engineers can cover on-call windows that overlap with Dubai, Singapore, and Japan, checked on how they have handled real production incidents. For a larger platform team, or a pipeline specialist with a specific tool such as Jenkins, GitHub Actions, or GitLab CI, the same screening extends across India.'],
    ['Pipelines, Infrastructure, or Operations', 'Pipeline engineers are screened on reliability at scale. Infrastructure engineers are screened on Terraform or similar tools. Operations engineers are screened on incident response.'],
  ],
  'faqs' => [
    ['How do I hire a DevOps engineer in Chennai?', 'Tell Adhiran Infotech whether you need pipelines, infrastructure, or operations skills and which tools you use. Its Chennai team will send a shortlist, usually within 24 hours.'],
    ['Where can I hire DevOps engineers in India?', 'Adhiran Infotech provides DevOps engineers from Chennai and across India.'],
    ['Is a DevOps engineer the same as a cloud engineer?', 'They overlap, but DevOps focuses on pipelines and automation while cloud roles focus on architecture. See the <a href="hire-cloud-engineer">AWS and Azure</a> pages for cloud specialists.'],
  ],
],

'sap-it-solutions' => [
  'title' => 'Hire SAP Consultants in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire SAP consultants and developers in Chennai and across India for implementation, ABAP and support. Module-specific talent, shortlisted in 24 hours.',
  'h1'    => 'Hire SAP Consultants and Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides SAP consultants and developers in Chennai and across India for implementation, customization, and support. SAP modules such as FICO, MM, and SD work almost independently, so Adhiran asks for your module and version (ECC or S/4HANA) before it builds a shortlist.',
  'sections' => [
    ['SAP Consultants in Chennai and India', 'Adhiran’s Chennai team screens for the exact SAP module and project phase you are in, such as configuration, testing, or go-live support, and because SAP skills are often scarce in one city, the same search extends across India to increase the chance of finding a consultant who has worked on your module and industry before.'],
    ['Implementation or Ongoing Support', 'Implementation consulting needs project experience in one module. Ongoing support and ABAP customization needs someone familiar with your SAP version and your existing customizations.'],
  ],
  'faqs' => [
    ['How do I hire an SAP consultant in Chennai?', 'Give Adhiran Infotech your SAP module, version, and project phase. Its Chennai team will send a shortlist of matching consultants, usually within 24 hours.'],
    ['Where can I hire SAP developers in India?', 'Adhiran Infotech provides SAP developers and consultants from Chennai and across India.'],
    ['Do you staff for specific SAP modules?', 'Yes. Tell Adhiran whether you need FICO, MM, SD, or another module so the shortlist matches.'],
  ],
],

'servicenow' => [
  'title' => 'ServiceNow Developers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire ServiceNow developers and consultants in Chennai and across India for implementation, workflows and support. Shortlist in 24 hours.',
  'h1'    => 'Hire ServiceNow Developers and Consultants in Chennai and India',
  'lead'  => 'Adhiran Infotech provides ServiceNow developers and consultants in Chennai and across India. ServiceNow hiring usually means either a first implementation of a module such as ITSM or HR Service Delivery, or ongoing workflow customization on a live instance, and Adhiran staffs each differently.',
  'sections' => [
    ['ServiceNow Developers and Consultants in Chennai and India', 'Chennai-based developers can join an existing platform team and work inside an already-configured instance without disrupting current automations, screened for that care as well as platform skill. For new rollouts, Adhiran can also bring in a consultant from across India who has implemented your specific module before.'],
    ['Implementation or Ongoing Customization', 'Implementation suits a project-based consultant. Ongoing customization usually suits augmenting your platform team.'],
  ],
  'faqs' => [
    ['How do I hire a ServiceNow developer in Chennai?', 'Tell Adhiran Infotech your module, whether it is a new rollout or an existing instance, and your seniority needs. The Chennai team will shortlist candidates within about 24 hours.'],
    ['Where can I hire ServiceNow developers in India?', 'Adhiran Infotech provides ServiceNow developers and consultants from Chennai and across India.'],
    ['Can you provide ongoing ServiceNow support?', 'Yes. Both implementation consulting and long-term support staffing are available.'],
  ],
],

'hire-veeva-developer' => [
  'title' => 'Hire Veeva Developers in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire Veeva CRM and Vault developers in Chennai and across India for life sciences projects. Compliance-aware talent, shortlisted in 24 hours.',
  'h1'    => 'Hire Veeva Developers and Consultants in Chennai and India',
  'lead'  => 'Adhiran Infotech provides Veeva CRM and Vault developers and consultants in Chennai and across India for life sciences and pharma companies. Veeva work is shaped by regulatory validation, so Adhiran screens for pharma domain knowledge as well as platform skill.',
  'sections' => [
    ['Veeva Developers and Consultants in Chennai and India', 'Chennai-based Veeva developers support existing life sciences systems within established change-control processes, where changes may need validation and documentation. Because Veeva talent is a small pool, Adhiran also searches across India for consultants who have implemented Veeva CRM or Vault in regulated environments.'],
    ['Veeva CRM or Veeva Vault', 'Specify which product your project involves. Adhiran matches candidates to CRM or Vault work, since the two have different configuration approaches.'],
  ],
  'faqs' => [
    ['How do I hire a Veeva developer in Chennai?', 'Tell Adhiran Infotech which Veeva product you use and whether the work is implementation or support. The Chennai team will send a shortlist, usually within 24 hours.'],
    ['Where can I hire Veeva consultants in India?', 'Adhiran Infotech provides Veeva consultants and developers from Chennai and across India.'],
    ['Do your Veeva candidates understand life sciences compliance?', 'Yes. They are screened for life sciences domain knowledge, since regulation matters as much as platform skill.'],
  ],
],

'power-bi' => [
  'title' => 'Hire Power BI Developers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire Power BI developers and consultants in Chennai and across India for dashboards, DAX and data modeling. Shortlist within 24 hours.',
  'h1'    => 'Hire Power BI Developers and Consultants in Chennai and India',
  'lead'  => 'Adhiran Infotech provides Power BI developers and consultants in Chennai and across India. A Power BI report is only as reliable as its data model, so Adhiran weights data modeling and DAX heavily when it screens candidates, not just visual design.',
  'sections' => [
    ['Power BI Developers and Consultants in Chennai and India', 'Chennai-based Power BI developers build dashboards and reporting automation in hours that overlap with your team, prioritised for planning the data model before the visuals. If you already have a Power BI setup that breaks when data changes, Adhiran can also bring in a consultant from anywhere in India to audit and rebuild the model.'],
    ['New Dashboards or Fixing an Existing Setup', 'New builds need model-first planning. Existing setups often need a restructure, not a patch of individual reports.'],
  ],
  'faqs' => [
    ['How do I hire a Power BI developer in Chennai?', 'Tell Adhiran Infotech your data sources, reporting goals, and seniority. The Chennai team will send a shortlist, usually within 24 hours.'],
    ['Where can I hire Power BI developers in India?', 'Adhiran Infotech provides Power BI developers and consultants from Chennai and across India.'],
    ['Can you fix an existing Power BI setup?', 'Yes. Consultants can audit and restructure an existing model as well as build new dashboards.'],
  ],
],

'hire-data-science-developer' => [
  'title' => 'Hire Data Analysts in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire data analysts and data scientists in Chennai and across India, from reporting and SQL to predictive modeling. Shortlist within 24 hours.',
  'h1'    => 'Hire Data Analysts and Data Scientists in Chennai and India',
  'lead'  => 'Adhiran Infotech provides data analysts and data scientists in Chennai and across India. The roles are often mixed up: analysts explain what happened using SQL and reporting, while scientists build models that predict what will happen, so Adhiran confirms which one you need first.',
  'sections' => [
    ['Data Analysts and Data Scientists in Chennai and India', 'Chennai-based analysts are screened on SQL, business intelligence tools, and the ability to turn a business question into a useful query. Predictive modeling talent is scarcer, so for data scientist roles the search extends across India, cross-checked against the <a href="ai">AI and Machine Learning</a> pool for production machine learning work.'],
    ['Analyst, Scientist, or Both', 'Larger data programs often need both as complementary roles. Adhiran can staff them together.'],
  ],
  'faqs' => [
    ['How do I hire a data analyst in Chennai?', 'Tell Adhiran Infotech your tools, data sources, and seniority. Its Chennai team will screen candidates and send a shortlist, usually within 24 hours.'],
    ['Where can I hire data scientists in India?', 'Adhiran Infotech provides data scientists from Chennai and across India.'],
    ['What is the difference between a data analyst and a data scientist?', 'Analysts focus on reporting and past performance. Scientists build predictive models. Describe your goal and Adhiran will recommend the right role.'],
  ],
],

'hire-qa-developer' => [
  'title' => 'Hire QA Engineers in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire QA engineers and software testers in Chennai and across India for manual testing and test automation. Selenium, Cypress and Playwright talent.',
  'h1'    => 'Hire QA Engineers and Software Testers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides QA engineers and software testers in Chennai and across India for manual testing and test automation. Manual and automation testing are different skills, so Adhiran screens for the type of testing your product needs.',
  'sections' => [
    ['QA Engineers and Test Automation Engineers in Chennai and India', 'Chennai-based testers join sprint teams in overlapping hours, prioritised for domain intuition on early-stage products with shifting requirements. For stable products needing repeatable regression coverage, Adhiran also finds automation engineers across India who work with Selenium, Cypress, or Playwright, judged on how maintainable their test suites are.'],
    ['Manual, Automation, or Both', 'Frequent changes favor manual and exploratory testing. Stable products benefit from automation. Adhiran can advise based on your product stage.'],
  ],
  'faqs' => [
    ['How do I hire a QA engineer in Chennai?', 'Tell Adhiran Infotech whether you need manual or automation testing and which tools you use. The Chennai team will send a shortlist, usually within 24 hours.'],
    ['Where can I hire software testers in India?', 'Adhiran Infotech provides QA engineers and software testers from Chennai and across India.'],
    ['Which automation frameworks do you screen for?', 'Commonly Selenium, Cypress, and Playwright, matched to the tools your team already uses.'],
  ],
],

'enterprise-solutions' => [
  'title' => 'Enterprise Platforms Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire SAP, ServiceNow, Salesforce and Oracle consultants in Chennai and across India. Platform-specific screening and a shortlist within 24 hours.',
  'h1'    => 'Hire Enterprise Platform Consultants in Chennai and India',
  'lead'  => 'Adhiran Infotech provides SAP, ServiceNow, Salesforce, and Oracle consultants in Chennai and across India. Each platform has its own certifications and modules, so Adhiran screens every platform separately instead of using one general interview.',
  'sections' => [
    ['Enterprise Platform Talent in Chennai and India', 'Chennai-based consultants are available for implementation, customization, and support on SAP, ServiceNow, Salesforce, and Oracle: see <a href="sap-it-solutions">SAP</a> and <a href="servicenow">ServiceNow</a>. When your module or industry is uncommon, the same search extends across India, so the shortlist still comes from one team and one screening standard.'],
  ],
  'faqs' => [
    ['Where can I hire SAP or ServiceNow consultants in India?', 'Adhiran Infotech provides SAP and ServiceNow consultants from Chennai and across India, screened for the specific platform and module.'],
    ['Can you staff more than one platform on the same project?', 'Yes. Many GCC and dedicated-team engagements combine platforms, and each role is screened against its own platform requirements.'],
  ],
],

'cloud-engineering' => [
  'title' => 'Cloud &amp; DevOps Talent Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire AWS, Azure and DevOps engineers in Chennai and across India for your GCC or offshore team. Cloud staffing with a 24-hour shortlist.',
  'h1'    => 'Hire Cloud and DevOps Engineers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides cloud and DevOps engineers in Chennai and across India. Cloud needs usually split into one provider’s services, pipeline and automation work, or a mix when a team builds infrastructure from scratch, and Adhiran asks which applies before it staffs.',
  'sections' => [
    ['Cloud Engineers in Chennai and India', 'Chennai-based engineers staff migrations, build-outs, and ongoing operations across AWS, Azure, and <a href="hire-devops-engineer">DevOps</a>. Larger GCC builds often need a mixed team, so Adhiran assembles that team from Chennai and other parts of India under one screening process.'],
  ],
  'faqs' => [
    ['Where can I hire cloud engineers in India?', 'Adhiran Infotech provides AWS, Azure, and DevOps engineers from Chennai and across India.'],
    ['Should I hire separate cloud and DevOps specialists?', 'For anything beyond a small team, yes. Cloud architecture and pipeline engineering are different enough that one person often has moderate depth in both instead of strength in either.'],
  ],
],

'digital-engineering' => [
  'title' => 'Hire Software Engineers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire software engineers in Chennai and across India. Java, Python, .NET, React and Node.js developers for staff augmentation or dedicated teams.',
  'h1'    => 'Hire Software Engineers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides software engineers in Chennai and across India, covering Java, .NET, Python, React, and Node.js. Each language has its own talent pool, so Adhiran narrows the language and role type before it starts sourcing.',
  'sections' => [
    ['Software Engineers in Chennai and India', 'Chennai is a strong source for backend and frontend engineers, usually staffed as separate hires since specialist depth tends to beat generalist breadth on production systems. When you need rare full-stack profiles or many engineers at once, the same search extends across India, screened to the same standard.'],
  ],
  'faqs' => [
    ['Where can I hire software developers in India?', 'Adhiran Infotech provides software developers from Chennai and across India, on a staff augmentation or dedicated team basis.'],
    ['Do you supply full-stack developers?', 'Yes, though specialist hires are recommended for most production work. Full-stack developers fit smaller, earlier-stage projects better.'],
  ],
],

'aiml-solutions' => [
  'title' => 'AI &amp; Data Talent in Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire AI, machine learning and data engineering talent in Chennai and across India, from GenAI features to analytics. Shortlist within 24 hours.',
  'h1'    => 'Hire AI and Data Talent in Chennai and India',
  'lead'  => 'Adhiran Infotech provides AI, machine learning, and data talent in Chennai and across India. A data analyst, a data scientist, and an AI engineer are three different hires, so Adhiran helps you match your goal to the right specialist.',
  'sections' => [
    ['AI and Data Talent in Chennai and India', 'Chennai-based specialists are available for <a href="hire-data-science-developer">Data Analytics</a> and <a href="ai">AI and Machine Learning</a> roles, and large GCC programs that need all three data, analytics, and AI roles working together can draw on the same talent pool from Chennai and other Indian cities.'],
  ],
  'faqs' => [
    ['Where can I hire AI and data professionals in India?', 'Adhiran Infotech provides AI, machine learning, and data professionals from Chennai and across India.'],
    ['Which role do I need: analyst, scientist or AI engineer?', 'Choose an analyst for reporting, a scientist for prediction, and an AI engineer for building AI features. Describe your goal and Adhiran will point you to the right one.'],
  ],
],

'application-solutions' => [
  'title' => 'Web &amp; App Development Chennai, India | Adhiran Infotech',
  'desc'  => 'Web and mobile app development from Chennai, India. Adhiran Infotech staffs teams for MVPs, enterprise platforms and long-term application support.',
  'h1'    => 'Web and Mobile App Development in Chennai and India',
  'lead'  => 'Adhiran Infotech provides web and mobile application development teams in Chennai and across India, from small MVPs to enterprise platforms. The team size and seniority mix are set by the project stage, so an MVP gets a lean senior team and a large platform gets a structured, maintainable one.',
  'sections' => [
    ['App Development in Chennai and India', 'For projects that benefit from close collaboration, Adhiran builds the core team in Chennai with React and Node.js developers for web and mobile specialists for iOS and Android, and when the product needs a skill that is scarce locally, such as a specific mobile framework, developers from other Indian cities join the same team.'],
    ['MVP or Enterprise Platform', 'MVPs need speed and independent decision-making, so Adhiran favors small senior teams. Enterprise platforms need long-term maintainability, so the team includes more structure and documentation from the start.'],
  ],
  'faqs' => [
    ['Who can build a web or mobile app for me in Chennai?', 'Adhiran Infotech staffs web and mobile app development teams in Chennai, from MVP builds to enterprise platforms.'],
    ['Can I hire app developers across India instead of only in Chennai?', 'Yes. Adhiran sources app developers in Chennai and across India and combines them into one project team.'],
  ],
],

'team-solutions' => [
  'title' => 'Dedicated Development Team Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Build a dedicated offshore development team in Chennai or across India. Adhiran Infotech hand-picks the talent and supports the team after it starts.',
  'h1'    => 'Build Your Dedicated Development Team in Chennai and India',
  'lead'  => 'A dedicated development team is a self-contained offshore team that works only on your projects. Adhiran Infotech builds dedicated teams in Chennai and across India, choosing each member for the stack and seniority you need, so you get capacity without managing individual hires.',
  'sections' => [
    ['A Dedicated Team in Chennai and India', 'Most dedicated teams start in Chennai, where Adhiran can recruit, interview, and onboard quickly, with stand-ups and reviews falling inside hours shared with Dubai, Singapore, and Japan. When the roadmap needs a specialty that is scarce in Chennai, the team can include members from elsewhere in India, working remotely as one coordinated unit under the same screening standard.'],
    ['When to Choose a Dedicated Team', 'Choose a dedicated team for multi-month work with a defined scope, such as a product line or a long-running application. For shorter or shifting needs, <a href="talent-solutions">staff augmentation</a> is usually the better fit.'],
  ],
  'faqs' => [
    ['What is a dedicated development team?', 'It is an offshore team assembled for your projects only, with its own structure, rather than individuals added into your existing team.'],
    ['Can I build a dedicated development team in Chennai?', 'Yes. Adhiran Infotech recruits and assembles dedicated teams in Chennai, its home base.'],
    ['Can the team include developers from other Indian cities?', 'Yes. Adhiran can source team members across India and manage them as one coordinated team.'],
  ],
],

'project-solutions' => [
  'title' => 'Project Outsourcing Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Outsource a software project to a team in Chennai, India. Adhiran Infotech staffs project-based delivery with defined scope, milestones and a clear end date.',
  'h1'    => 'Outsource Software Projects to Chennai and India',
  'lead'  => 'Project outsourcing means handing a defined piece of work, with a scope and an end date, to an external team. Adhiran Infotech staffs project delivery from Chennai and across India, assembling a team measured against your project outcome instead of open-ended hours.',
  'sections' => [
    ['Project Delivery From Chennai and India', 'Projects are scoped and staffed in Chennai first, where Adhiran assembles the right mix of engineers and testers quickly in a time zone that overlaps with your business hours, and if the project needs a rare skill, specialists from elsewhere in India join the same delivery team. You still deal with one point of contact either way.'],
    ['Project Engagement or Dedicated Team?', 'A project has a fixed deliverable and completion date. A dedicated team is ongoing capacity with no fixed end. Pick the project model when you want a result, and the dedicated team model when you want continuous capacity.'],
  ],
  'faqs' => [
    ['Can I outsource a software project to India through Adhiran Infotech?', 'Yes. Adhiran staffs project-based work delivered from Chennai and other parts of India, with scope and milestones agreed at the start.'],
    ['How is project outsourcing different from staff augmentation?', 'Project outsourcing is tied to a deliverable and an end date. Staff augmentation adds people to your team for as long as you need them.'],
  ],
],

'financial-services' => [
  'title' => 'Hire Fintech Developers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire fintech and banking developers in Chennai and India. Core banking modernization, data and compliance-ready teams, first shortlist in 24 hours.',
  'h1'    => 'Hire Fintech and Banking Developers in Chennai and India',
  'sub'   => 'For institutions that cannot afford to be down',
  'lead'  => 'Adhiran Infotech provides fintech and banking developers in Chennai and across India for banks, capital markets firms, fintech companies, and insurers. Systems in this sector cannot fail without regulatory and financial consequences, so Adhiran screens for candidates who have worked within change control and compliance processes.',
  'sections' => [
    ['Financial Services Developers in Chennai and India', 'Chennai-based developers support core banking modernization, working incrementally alongside systems that cannot be taken offline for a rewrite. Fintech products also need developers who treat data handling, audit trails, and regulatory reporting as functional requirements, so the same compliance-aware screening extends across India.'],
  ],
  'faqs' => [
    ['Where can I hire fintech developers in India?', 'Adhiran Infotech provides fintech and banking developers from Chennai and across India, screened for compliance-process experience.'],
    ['Do your developers have financial services compliance experience?', 'Yes. Financial services candidates are screened for change-control and compliance familiarity as well as technical skill.'],
  ],
],

'consumer-products' => [
  'title' => 'eCommerce Developers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire eCommerce and retail software developers in Chennai and India. Build storefronts, inventory and supply chain systems, shortlist in 24 hours.',
  'h1'    => 'Hire eCommerce and Retail Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides eCommerce and retail software developers in Chennai and across India for consumer products companies. Most projects need both the customer-facing storefront and the inventory and supply chain systems behind it, and Adhiran staffs them together.',
  'sections' => [
    ['eCommerce and Retail Developers in Chennai and India', 'Customer-facing storefront work draws on Chennai-based React and Node.js talent, screened for high-traffic performance that affects conversion. Inventory and supply chain roles behind the storefront can also be sourced across India, prioritised for data accuracy and reliability over flashy features.'],
  ],
  'faqs' => [
    ['Where can I hire eCommerce developers in India?', 'Adhiran Infotech provides eCommerce developers from Chennai and across India.'],
    ['Can you staff the storefront and the inventory systems together?', 'Yes, as one coordinated engagement, since the two systems need to work together.'],
  ],
],

'hospitality' => [
  'title' => 'Hospitality Developers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire hotel and hospitality software developers in Chennai and India. Booking engines, guest apps and peak-season scalable systems.',
  'h1'    => 'Hire Hospitality Software Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides hotel and hospitality software developers in Chennai and across India. Hospitality traffic is seasonal and spiky, so booking systems must handle holiday surges without degrading, and Adhiran picks developers with peak-load experience.',
  'sections' => [
    ['Hospitality Developers in Chennai and India', 'Chennai-based developers build reservation systems that avoid double-bookings under heavy concurrent use, a concurrency challenge Adhiran screens for directly. Guest-facing apps and internal tools can also be staffed together from React and Node.js talent across India.'],
  ],
  'faqs' => [
    ['Where can I hire hotel software developers in India?', 'Adhiran Infotech provides hospitality software developers from Chennai and across India.'],
    ['Do your developers understand peak-season traffic?', 'Yes. Hospitality engagements are staffed with peak-load and concurrency handling in mind.'],
  ],
],

'professional-services' => [
  'title' => 'Consulting Firm Developers Chennai, India | Adhiran Infotech',
  'desc'  => 'Hire software developers for consulting, legal and accounting firms in Chennai and India. Practice management, client portals and reporting tools.',
  'h1'    => 'Hire Developers for Professional Services Firms in Chennai and India',
  'lead'  => 'Adhiran Infotech provides software developers for consulting, legal, and accounting firms in Chennai and across India. These firms often need internal practice tools and client-facing platforms at the same time, and Adhiran staffs both sides.',
  'sections' => [
    ['Developers for Professional Services Firms in Chennai and India', 'Chennai-based developers build internal practice tools that connect to existing time tracking, billing, and document workflows instead of replacing them. Client-facing reporting and portals draw on <a href="power-bi">Power BI</a> and web development talent from across India, staffed as part of the same engagement.'],
  ],
  'faqs' => [
    ['Where can I hire developers for a consulting firm in India?', 'Adhiran Infotech provides developers for consulting, legal, and accounting firms from Chennai and across India.'],
    ['Can they integrate with our billing and time-tracking systems?', 'Yes. Describe the systems and candidates are screened for integration experience.'],
  ],
],

'manufacturing' => [
  'title' => 'Manufacturing Developers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire manufacturing software developers in Chennai and India. MES, production line automation and supply chain systems, shortlist in 24 hours.',
  'h1'    => 'Hire Manufacturing Software Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides manufacturing software developers in Chennai and across India. Manufacturing software often connects to physical production systems such as MES platforms and sensor data, which is a different skill set from business application development.',
  'sections' => [
    ['Manufacturing Software Developers in Chennai and India', 'Chennai-based developers are screened for real-time production data experience on MES platforms, rather than assuming general backend skill will transfer. Supply chain and inventory systems behind the production floor can be staffed from the <a href="cloud-engineering">Cloud Services</a> and <a href="hire-data-science-developer">Data Analytics</a> pools across India.'],
  ],
  'faqs' => [
    ['Where can I hire manufacturing software developers in India?', 'Adhiran Infotech provides manufacturing software developers from Chennai and across India.'],
    ['Do you staff developers with MES experience?', 'Yes, where the project involves MES or line-level integration. Mention it in your request.'],
  ],
],

'life-sciences' => [
  'title' => 'Pharma Software Developers Chennai, India | Adhiran Infotech',
  'desc'  => 'Hire pharma, healthcare and life sciences software developers in Chennai and India. Veeva, clinical data and compliance-ready delivery.',
  'h1'    => 'Hire Pharma and Life Sciences Software Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides software developers for pharma, life sciences, and healthcare companies in Chennai and across India. This work is defined by regulatory validation: a system change often has to be validated and documented before it can go live, and Adhiran staffs with that process in mind.',
  'sections' => [
    ['Life Sciences Developers in Chennai and India', 'A large share of this work runs through Veeva CRM and Vault, staffed from Chennai and screened for life sciences regulation: see the <a href="hire-veeva-developer">Veeva page</a>. Healthcare and pharma teams elsewhere in India are sourced with the same screening, treating data handling and access control as core architecture, with analytics needs routed to the <a href="hire-data-science-developer">Data Analytics</a> pool.'],
  ],
  'faqs' => [
    ['Where can I hire pharma software developers in India?', 'Adhiran Infotech provides pharma and life sciences software developers from Chennai and across India.'],
    ['Is this only for Veeva?', 'No. Veeva is one common platform, but Adhiran also staffs general development and data roles for pharma, life sciences, and healthcare.'],
  ],
],

'edutech' => [
  'title' => 'EdTech Developers Chennai &amp; India | Adhiran Infotech',
  'desc'  => 'Hire EdTech developers in Chennai and India. Learning platforms, content and assessment systems, first shortlist in 24 hours.',
  'h1'    => 'Hire EdTech Developers in Chennai and India',
  'lead'  => 'Adhiran Infotech provides EdTech developers in Chennai and across India for learning platforms, content systems, and assessment tools. EdTech products serve learners and administrators at once, so information architecture matters as much as individual features.',
  'sections' => [
    ['EdTech Developers in Chennai and India', 'Chennai-based React and mobile-capable developers, prioritised for content delivery and progress tracking, build the learner-facing side. Backend developers who understand content structure and versioning, for the admin and assessment side, can be sourced from across India as part of the same team.'],
  ],
  'faqs' => [
    ['Where can I hire EdTech developers in India?', 'Adhiran Infotech provides EdTech developers from Chennai and across India.'],
    ['Can you staff the learner app and the admin side together?', 'Yes, as one coordinated team, since both sides use the same content and progress data.'],
  ],
],

// The page keeps its own styled H1 markup; 'h1' here is the record of the copy.
'contact' => [
  'title' => 'Contact Adhiran Infotech | Hire Talent in Chennai &amp; India',
  'desc'  => 'Need developers or a GCC team? Contact Adhiran Infotech in Chennai to hire vetted tech talent across India. Get a first shortlist in 24 hours.',
  'h1'    => 'Let’s Build Something Great Together',
  'lead'  => 'To contact Adhiran Infotech, email sales@adhiraninfotech.com, call +91 90423 59211, or use the form on this page. Adhiran is based in Chennai and hires talent for clients across India, and it usually responds with a first shortlist within 24 hours of a clear request.',
  'sections' => [
    ['What to Include in Your Request', 'Name the technology, the type of engagement (staff augmentation, dedicated team, or GCC), and your timeline. State whether you prefer Chennai or are open to hiring across India, so the request goes to the right recruiter.'],
  ],
  // The first two come from the source document; the rest were already on the page.
  'faqs' => [
    ['How do I contact Adhiran Infotech?', 'Email sales@adhiraninfotech.com, call +91 90423 59211, or submit the contact form.'],
    ['Where is Adhiran Infotech located?', 'Adhiran Infotech is based in Chennai, Tamil Nadu, India.'],
    ['How quickly will I get a response?', 'We aim to reply to every enquiry within one business day. For staffing requests, qualified candidate profiles typically follow within 24–48 hours of the brief being confirmed.'],
    ['Do you work across time zones?', 'Yes. We operate from India, the United States, Singapore, the UAE, Japan and Australia, so we can align delivery and communication with your working hours rather than ours.'],
    ['I’m looking for a job, not hiring. Is this the right form?', 'You can select “Careers” as the subject above, but our <a href="career">Careers page</a> is the faster route — it lists current openings and lets you attach a résumé directly to a role.'],
  ],
],

'about' => [
  'title' => 'About Adhiran Infotech | Staffing in Chennai, India',
  'desc'  => 'Adhiran Infotech is a Chennai staffing and GCC talent partner with 10+ years of experience, teams in 5 countries and 500+ successful placements across India.',
  'h1'    => 'About Adhiran Infotech',
  'lead'  => 'Adhiran Infotech is a technology talent and staffing partner based in Chennai, India, with over 10 years of industry experience, local teams in 5 countries, and more than 500 successful placements. It works with clients in the US, Singapore, Japan, and Dubai that want to build technology capacity in Chennai and across India without managing local recruitment.',
  'sections' => [
    ['Why Global Companies Work With Adhiran', 'Adhiran focuses on technology and GCC talent instead of general staffing, so its screening, candidate networks, and account management are built around technology hiring.'],
  ],
  'faqs' => [
    ['Who is Adhiran Infotech?', 'Adhiran Infotech is a Chennai-based staffing and GCC talent partner that helps companies hire technology professionals in Chennai and across India.'],
  ],
],

'career' => [
  'title' => 'Careers at Adhiran Infotech | Jobs in Chennai, India',
  'desc'  => 'Join Adhiran Infotech in Chennai. Work on real projects across industries with a global staffing and consulting team. View open roles or submit your resume.',
  'h1'    => 'Grow Your Next, With Us',
  'lead'  => 'Adhiran Infotech is a staffing and consulting team based in Chennai, India, that helps organizations hire great talent and build great software, and it is also hiring for its own team. Candidates work on real projects across real industries, backed by 10+ years of industry presence, teams in 5 countries, and 500+ successful placements.',
  'sections' => [],
  'faqs' => [],
],

'life-with-ait' => [
  'title' => 'Life at Adhiran Infotech | Culture in Chennai, India',
  'desc'  => 'See what work is like at Adhiran Infotech in Chennai: collaborative teams, funded learning and certifications, global project exposure and well-being.',
  'h1'    => 'Where Talent Thrives',
  'lead'  => 'Life at Adhiran Infotech in Chennai centers on collaborative work environments, funded learning and certifications, and global project exposure. The company aims to be a place where people do their best work and grow their careers, not only a placement agency’s internal team.',
  'sections' => [],
  'faqs' => [],
],

// The four entries below carry title/description/H1 only: the source document
// gives no opening paragraphs for them, so the existing page body is kept.
'vision-mission' => [
  'title' => 'Vision &amp; Mission | Adhiran Infotech, Chennai, India',
  'desc'  => 'The vision and mission behind Adhiran Infotech, a Chennai-based talent partner helping companies build technology teams in Chennai and across India.',
  'h1'    => 'Our Vision and Mission',
  'lead'  => '',
  'sections' => [],
  'faqs' => [],
],

'core-values' => [
  'title' => 'Core Values | Adhiran Infotech, Chennai, India',
  'desc'  => 'The values that guide how Adhiran Infotech, a Chennai staffing and GCC talent partner, builds teams and works with clients across India and abroad.',
  'h1'    => 'Our Core Values',
  'lead'  => '',
  'sections' => [],
  'faqs' => [],
],

'case-studies' => [
  'title' => 'Case Studies | Adhiran Infotech, Chennai, India',
  'desc'  => 'See how Adhiran Infotech helped companies hire developers and build technology teams in Chennai and across India. Client results and placement stories.',
  'h1'    => 'Client Success Stories',
  'lead'  => '',
  'sections' => [],
  'faqs' => [],
],

// Not covered by the combined document; kept from the earlier copy.
'news-blog' => [
  'title' => 'News &amp; Insights | Adhiran Infotech Blog',
  'desc'  => 'Insights on GCC talent, technology staffing, and hiring trends in Chennai from Adhiran Infotech.',
  'h1'    => 'News &amp; Insights',
  'lead'  => '',
  'sections' => [],
  'faqs' => [],
],

];
