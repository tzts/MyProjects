<?php
@session_start()
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="teachers.css">
		<meta charset="utf8">
		<title>Welcome Principal!</title>
		<script src="jquery-1.11.3.min.js"> </script>
		
		<link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.css">
		<script src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>
		<script src="jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
		
		<script>
			$(document).ready(function(){
				
				$(function() {
					$( "#tabs" ).tabs();
				});
				
				$(function() {
					$( ".accordion" ).accordion();
				});
				
				$(".accordion").accordion({
				collapsible: true,
				heightStyle:false,
				navigation: true 
				});
				
				$("#accordion").accordion({
					heightStyle: "content"
				});
				
			});
			
		</script>
	</head>
<body>
	<h1>Please select the school competences</h1>
	<div id="container">
	<form name="unesco" method="post" action="pcpform.php"><!--FORM-->
		<div id="tabs">
			<ul>
				<li><a href="#tabs-1">Leadership and Management</a></li>
				<li><a href="#tabs-2">Use of ICT in the curriculum</a></li>
				<li><a href="#tabs-3">Teaching and Learning</a></li>
				<li><a href="#tabs-4">Assessment of digital capability</a></li>
				<li><a href="#tabs-5">Professional Development </a></li>
				<li><a href="#tabs-6">Resources</a></li>
			</ul>
			<div id="tabs-1"><!--leadership and managment-->
			<div class="accordion">
			<h3><b>ICT and the school vision</b></h3>
			<div>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th>vision</th> 
		<th> <input type="radio" name="1" value="1"/> The school’s overall vision includes
		the needs of the wider school
		community. It is informed by
		developments in ICT and exemplary
		educational practice nationally. It is
		informed, understood and embraced
		by all, or nearly all, staff, governors
		and pupils and is supported by
		parents/carers and the wider
		community. E-safeguarding is clearly
		detailed within the school vision in
		relation to keeping all members of
		the school community safe.</th>
		<th> <input type="radio" name="1" value="2"/>The school’s overall vision clearlyidentifies the distinctive contribution
		of ICT and its potential to enhance allaspects of the school’s work. Itidentifies how ICT supports theschool’s wider aims and aspirations
		and is informed, understood andembraced by most staff, governorsand pupils. The school vision includese-safeguarding.
		</th>
		<th> <input type="radio" name="1" value="3"/>The school’s overall vision expresses
		clearly the potential for ICT to
		enhance learning, teaching and the
		organisational effectiveness and
		efficiency of the school. It is
		understood and embraced by many
		staff and governors. There is
		reference to e-safeguarding in the
		school vision.
		</th>
		<th> <input type="radio" name="1" value="4"/>The school’s overall vision includes
		some reference to ICT but is unclear
		about the school’s expectations of
		ICT for learning and teaching. It has
		been shared with staff, but is
		understood and embraced by only
		some. There is no reference to esafeguarding
		in the school vision.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th>Reviewing
		the vision</th>
		<th> <input type="radio" name="2"value="1"/> The school frequently reviews and
		updates the place of ICT within its
		overall vision. It explores and
		evaluates the potential of emerging
		technologies, new initiatives and
		practices, including any associated
		risks. Reviews take account of
		internal evaluations and changing
		learner practices within and beyond
		the school</th>
		<th> <input type="radio" name="2" value="2"/>The school regularly reviews and
		revises the place of ICT within its
		overall vision in the light of
		developments in technology,
		effective practices within and beyond
		the school and the outcomes of
		school monitoring and evaluation.

		</th>
		<th> <input type="radio" name="2" value="3"/>The school reviews the place of ICT
		within its overall vision in relation to
		current technologies and effective
		practices. This review is beginning to
		be informed by the outcomes of
		internal evaluations of the impact of
		ICT
		</th>
		<th> <input type="radio" name="2" value="4"/>The school does not have any
		systems to review the place of ICT
		within its overall vision. It has a
		limited awareness of the ways that
		current technologies or practices
		might influence its vision.
		</th>
		</tr>
		</thead>
		</table>
						</div>
						<h3><b>A strategy to achieve the vision</b></h3>
						<div>
			<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Strategic
		leadership across
		the whole school </th>
		<th> <input type="radio" name="3" value="1"/> 
		Strategic leadership for ICT including
		e-safeguarding extends to governors
		and external stakeholders.
		Empowered leadership of all aspects
		of ICT including e-safeguarding within
		and beyond the school is distributed
		and coordinated effectively. This
		approach ensures that ICT has
		widespread impact on all aspects of
		the school’s work. Systems are in
		place to develop and sustain this
		quality of leadership.
		</th>
		<th> <input type="radio" name="3" value="2"/>
		Proactive strategic leadership
		identifies, empowers and supports
		individuals to lead aspects of ICT
		including e-safeguarding. This is well
		coordinated across the school. This
		approach results in significant impact
		on many aspects of the school’s work
		including learning, teaching and pupil
		outcomes as well as overall
		effectiveness and efficiency
		</th>
		<th> <input type="radio" name="3" value="3"/>
		The responsibility for the strategic
		leadership of ICT rests with the head
		teacher and the senior leadership
		team. Distributed and coordinated
		leadership of some aspects of ICT
		across the whole school results in
		identifiable impact on learning and
		teaching.
		</th>
		<th> <input type="radio" name="3" value="4"/>
		The leadership of ICT has been left to
		one or two individuals who are not
		part of the senior leadership team.
		Lines of accountability are unclear
		and impact is limited.

		]</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th>  The quality of the
		strategy</th>
		<th> <input type="radio" name="4" value="1"/> 
		The ICT strategy is a key element of
		school improvement and fully
		incorporates e-safeguarding. It
		enables the school to innovate and
		realise its developing vision. ICT
		planning is creative, flexible and
		outward-looking. It sets challenging
		targets to extend the impact of ICT
		beyond the school. 
		</th>
		<th> <input type="radio" name="4" value="2"/>
		The ICT strategy sets out clear
		priorities for realising the vision and
		includes some elements related to esafeguarding.
		ICT planning is well
		informed and fully integrated into
		school improvement planning,
		setting challenging targets across the
		school. 
		</th>
		<th> <input type="radio" name="4" value="3"/>
		The ICT strategy is aligned with the
		vision and defines clear goals and
		actions to achieve it. The school
		identifies clear roles and
		responsibilities. ICT including esafeguarding
		planning identifies
		realistic short, medium and long term
		targets.

		</th>
		<th> <input type="radio" name="4" value="4"/>
		The ICT strategy is poorly defined and
		focuses mainly on resources.
		Planning is uncoordinated, lacks
		clarity and is insufficiently related to
		the vision. There is no reference to
		e-safeguarding within the strategy.

		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Budgetary
		effectiveness </th>
		<th> <input type="radio" name="5" value="1"/> 
		The budgetary processes within the
		ICT strategy ensure the development
		and longer term renewal of all
		aspects of ICT provision are fully
		accounted for. Budgeting takes
		account of the total cost of
		ownership of all ICT.
		</th>
		<th> <input type="radio" name="5" value="2"/>
		Budgetary processes ensure the
		continuity and development of most
		aspects of provision in line with the
		school’s planning for longer term
		renewal of ICT resources. The school
		understands the full cost implications
		of its ICT strategy both in terms of
		capital/revenue investment and
		professional development.
		</th>
		<th> <input type="radio" name="5" value="3"/>
		The school budgets carefully for ICT
		across the whole of its work and has
		begun to cost more fully the
		implications of its ICT strategy
		including professional development.
		The longer term renewal of ICT
		resources is being addressed.

		</th>
		<th> <input type="radio" name="5" value="4"/>
		The school has begun to plan its ICT
		budget more actively. Development
		and renewal of ICT resources are
		based on current needs but longer
		term renewal of ICT resources is not
		addressed. No internal planning
		exists for related professional
		development.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Environmental
		impact </th>
		<th> <input type="radio" name="6" value="1"/> 
		The school fully understands the
		environmental impact of its ICT
		strategy and has minimised this by
		taking a comprehensive range of
		measures.
		</th>
		<th> <input type="radio" name="6" value="2"/>
		The school has a good understanding
		of the environmental impact of its
		ICT strategy and has taken steps to
		minimise it.
		</th>
		<th> <input type="radio" name="6" value="3"/>
		The school understands the
		environmental impact of its ICT
		strategy and has identified some
		measures which could reduce this
		</th>
		<th> <input type="radio" name="6" value="4"/>
		The school has begun to examine the
		environmental impact of its ICT
		strategy.

		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> E-safeguarding </th>
		<th> <input type="radio" name="7" value="1"/> 
		The school is vigilant in identifying
		and responding to new challenges for
		e-safeguarding. Through constructive dialogue it encourages pupils,
		parents/carers, other stakeholders
		and the wider community to
		contribute to ongoing developments
		in e-safeguarding policy and practice,
		and helps them to deal with e-safeguarding
		challenges they
		encounter.

		</th>
		<th> <input type="radio" name="7" value="2"/>
		-E-safeguarding is embedded within
		the wider school culture. Policies are
		comprehensive and regularly reviewed in line with developments
		in technology and practice. There is
		coordinated and robust
		implementation of e-safeguarding
		policies by all staff, governors and
		pupils within and beyond the school
		and practice is monitored. The school
		engages regularly with stakeholders
		to promote the e-safeguarding of
		pupils and staff within and beyond
		the school.
		</th>
		<th> <input type="radio" name="7" value="3"/>
		The school is fully aware of its
		responsibilities and takes appropriate
		action to ensure that ICT usage by all staff and pupils is responsible, safe
		and secure. It has a coordinated
		approach to the development and
		implementation of its e-safeguarding
		policy.

		</th>
		<th> <input type="radio" name="7" value="4"/>
		The school is aware of its
		responsibilities to provide a safe and
		secure ICT environment for its staff and pupils. There are relevant
		policies in place, including an
		acceptable use policy, which are
		understood and adhered to by many
		staff and pupils.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Evaluating the
		effectiveness of
		the strategy </th>
		<th> <input type="radio" name="8" value="1"/> 
		There is systematic and routine
		evaluation of impact of ICT within
		and beyond the school, based on
		extensive evidence. All ICT
		expenditure is subject to rigorous
		evaluation in terms of its impact on
		pupil outcomes and organisational
		effectiveness. Evaluation informs
		strategic planning and practice,
		supports innovation and is used to
		demonstrate accountability to a wide
		range of stakeholders. 
		</th>
		<th> <input type="radio" name="8" value="2"/>
		There is regular and detailed
		monitoring and evaluation of the
		effectiveness of the strategy,
		including the impact of ICT
		expenditure on pupil outcomes and
		organisational effectiveness. This is
		based on a wide range of evidence
		from within and beyond the school
		and has a strong influence on
		strategic planning and practice.
		</th>
		<th> <input type="radio" name="8" value="3"/>
		There is regular monitoring of the
		implementation and effectiveness of
		the strategy and some links are made
		between ICT expenditure, pupil
		outcomes and organisational
		effectiveness. A range of evidence,
		from within and beyond the school, is
		beginning to inform strategic
		planning and practice. 
		</th>
		<th> <input type="radio" name="8" value="4"/>
		There is some monitoring of the
		implementation of the ICT strategy
		but this is based on minimal evidence
		and is not yet part of any planned
		whole-school approach. The school
		has begun to evaluate the
		effectiveness of its ICT expenditure
		but is not yet able to link this to
		improvements in pupil outcomes and
		organisational effectiveness.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
						</div>
						<h3><b>Strategic use of data</b></h3>
						<div>
						<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Information
		management
		strategy </th>
		<th> <input type="radio" name="9" value="1"/> 
		The school information management
		strategy is embraced by all
		stakeholders and fully addresses
		their needs. It is continuously
		reviewed in the light of new
		technologies and anticipates future
		needs
		</th>
		<th> <input type="radio" name="9" value="2"/>
		The school’s information
		management strategy is widely
		communicated and understood by
		staff, governors and most parents
		and learners. Effective
		implementation is supported by a
		cycle of evaluation and review.
		</th>
		<th> <input type="radio" name="9" value="3"/>
		The school’s information
		management strategy clearly
		identifies priorities, resources, roles
		and responsibilities. There is a
		consistent approach to
		implementation.
		</th>
		<th> <input type="radio" name="9" value="4"/>
		The school’s information
		management strategy is not well
		defined and there are inconsistent
		approaches to implementation.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Supporting
		assessment,
		recording and
		reporting </th>
		<th> <input type="radio" name="10" value="1"/> 
		A regularly updated strategy,
		including a consideration of risk, for the use of ICT to record, analyse and
		report on pupil performance is
		integral to school improvement.
		Online technologies and imaginative
		practices enable pupils,
		parents/carers and other
		stakeholders to have access to
		relevant information.
		</th>
		<th> <input type="radio" name="10" value="2"/>
		cycle of evaluation and review.
		The school information management
		strategy is embraced by all
		stakeholders and fully addresses
		their needs. It is continuously
		reviewed in the light of new
		technologies and anticipates future
		needs.
		1c-2 There is no coherent strategy for the
		use of ICT to support assessment,
		There is an agreed whole-school
		strategy for the use of ICT to record,
		There is a coherent strategy for the
		use of ICT to record, analyse and report on pupil performance. This is
		implemented effectively to track
		pupils’ progress, set targets and
		report (online where appropriate) to
		parents/carers and other
		stakeholders
		</th>
		<th> <input type="radio" name="10" value="3"/>
		There is an agreed whole-school
		strategy for the use of ICT to record, analyse and report on pupil
		performance. This is implemented
		consistently across the school. Where
		appropriate the school has
		implemented a system for online
		reporting for parents/carers.
		</th>
		<th> <input type="radio" name="10" value="4"/>
		There is no coherent strategy for the
		use of ICT to support assessment,
		 recording and reporting. There are
		variations in practice and little overall
		impact on the monitoring and
		analysis of pupil performance
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Communication
		strategy </th>
		<th> <input type="radio" name="11" value="1"/> 
		The school explores and exploits new
		and emerging technologies to ensure
		safe and effective two-way
		communication within, and beyond,
		the school. These are integrated
		effectively with other means of
		communication. Parents are able to
		comment and provide feedback on
		their children’s learning.
		</th>
		<th> <input type="radio" name="11" value="2"/>
		The school strategy identifies and
		promotes a range of digital
		technologies for effective and safe
		communication both within and
		beyond the school. Parents are
		frequently informed about their
		children’s’ progress and
		achievements and how to support
		these.
		</th>
		<th> <input type="radio" name="11" value="3"/>
		There is a coherent strategy for the
		effective use of ICT to support
		internal and external
		communications. This includes multichannel
		digital communications to
		parents and publishing school and
		curriculum information online for
		parents as appropriate though this is
		not consistent across the school.
		</th>
		<th> <input type="radio" name="11" value="4"/>
		There is no effective and consistent
		strategy for the use of ICT to support
		communication. Practices mainly
		replicate traditional processes for
		reporting and contact with parents.
		Only some stakeholders’ needs are
		met.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Legislative
		requirements </th>
		<th> <input type="radio" name="12" value="1"/> 
		The school regularly reviews and
		updates its procedures relating to
		relevant legislation. Risks are
		understood and compliance by all
		staff and pupils is monitored. The
		school takes steps to make
		parents/carers aware of relevant
		legislation.
		</th>
		<th> <input type="radio" name="12" value="2"/>
		The school has published clear
		guidelines for staff, and where
		appropriate for pupils, outlining their
		responsibilities in relation to relevant
		legislation. Risks are understood and
		compliance by all staff and pupils is
		monitored. 
		</th>
		<th> <input type="radio" name="12" value="3"/>
		The school has policies and
		procedures for relevant legislation
		and these are understood and
		implemented by most staff and
		pupils. 
		</th>
		<th> <input type="radio" name="12" value="4"/>
		The school is aware that it has
		responsibilities with respect to some
		relevant legislation. Some
		procedures, designed to ensure
		compliance, are in place but only a
		few staff understand and implement
		these.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>

						</div>									
					</div>
				</div>
				<div id="tabs-2"><!--Use of ICT in the curriculum-->
					<div class="accordion">
						<h3><b>Strategic approaches to the use of ICT in the curriculum
		</b></h3>
						<div>
						<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Planning for the
		development of
		pupils’ digital
		capability </th>
		<th> <input type="radio" name="13" value="1"/> 
		Planning for digital capability is
		effective with a wide range of high-quality
		experiences across the whole
		curriculum. Planning at all levels
		ensures that pupils are challenged to make creative use of ICT that extends
		their capability.
		</th>
		<th> <input type="radio" name="13" value="2"/>
		Systematic planning for digital
		capability is effective and includes an
		appropriate level of challenge with
		clear opportunities for pupils to
		achieve. Planning also identifies
		opportunities for pupils to creatively apply and consolidate their digital
		capability across subjects.
		</th>
		<th> <input type="radio" name="13" value="3"/>
		Planning for pupils’ digital capability
		incorporates a range of opportunities
		for pupils to develop and apply many
		aspects of their digital capability
		across subjects.
		</th>
		<th> <input type="radio" name="13" value="4"/>
		Planning for pupils’ digital capability
		incorporates only some aspects of
		digital capability. There is a limited
		range of opportunities for pupils to
		apply and improve their digital
		capability across subjects.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Planning to
		support learning
		and teaching </th>
		<th> <input type="radio" name="14" value="1"/> 
		Curriculum planning is
		comprehensive and innovative in its
		use of ICT to support learning and
		teaching. High quality and creative
		planning by all staff maximises the
		learning opportunities offered by ICT
		and transforms the learning
		experiences both within and beyond
		the school.
		</th>
		<th> <input type="radio" name="14" value="2"/>
		All curriculum planning identifies key
		areas where ICT can support learning
		and teaching. Effective planning by
		most staff reflects a good
		understanding of how ICT can
		enhance and extend learning and
		teaching both within and beyond the
		school.
		</th>
		<th> <input type="radio" name="14" value="3"/>
		Most curriculum plans or schemes of
		work identify where ICT can support
		learning and teaching. Planning by
		many staff is effective and reflects
		the growing understanding of how
		ICT can be used to enhance learning
		and teaching both within and beyond
		the school.
		</th>
		<th> <input type="radio" name="14" value="4"/>
		Some curriculum plans or schemes of
		work identify where ICT can support
		learning and teaching. Staff are left
		to decide whether to use these ideas
		or not. There is a developing
		awareness of how ICT can be used to
		improve learning and teaching within
		the school.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Matching
		capability to
		opportunities </th>
		<th> <input type="radio" name="15" value="1"/> 
		There is a constant interaction
		between the development of pupils'
		digital capability and their use of ICT
		in all curriculum areas. This enables
		pupils to develop their digital
		capability in a wide range of relevant
		contexts and gain maximum benefit
		from their use of ICT across the
		curriculum.
		</th>
		<th> <input type="radio" name="15" value="2"/>
		Mapping has identified and
		developed links between pupils'
		digital capability and their use of ICT
		in most curriculum areas. Planning
		takes careful account of these so that
		pupils experience progressive use of
		ICT in a range of contexts. 
		</th>
		<th> <input type="radio" name="15" value="3"/>
		Planning recognises the
		interdependence of the development
		of pupils’ digital capability and their
		use of ICT in some curriculum areas
		and has made clear links between
		the two. 
		</th>
		<th> <input type="radio" name="15" value="4"/>
		There is some interaction between
		those planning for the development
		of pupils’ digital capability and those
		planning for the use of ICT in some
		curriculum areas. 
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Planning for
		continuity within
		and between
		classes, phases
		and schools </th>
		<th> <input type="radio" name="16" value="1"/> 
		Teachers' planning always takes
		account of, and builds on, pupils'
		prior ICT attainment and experiences
		within and beyond the school. The
		school is imaginative and proactive in
		ensuring that there is continuity of
		ICT learning between years, phases
		and schools and partners. 
		</th>
		<th> <input type="radio" name="16" value="2"/>
		Teachers routinely build on pupils’
		previous ICT attainment and
		experiences when planning learning.
		The school has effective
		arrangements for the continuity of
		ICT learning when pupils move
		between years, phases, schools and
		partners. 
		</th>
		<th> <input type="radio" name="16" value="3"/>
		Most teachers’ planning builds on
		pupils’ ICT attainment and
		experiences but some pupils remain
		unchallenged by ICT work. 
		</th>
		<th> <input type="radio" name="16" value="4"/>
		Some account is taken of pupils' prior
		ICT attainment and experience when
		planning learning. However, many
		pupils have to repeat ICT learning or
		activities unnecessarily. 
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Planning for
		learning beyond
		the school </th>
		<th> <input type="radio" name="17" value="1"/> 
		Whole-school planning for learning
		beyond the school relies on ongoing
		research into learning opportunities,
		pupils’ and families’ access to, and
		use of, ICT.
		</th>
		<th> <input type="radio" name="17" value="2"/>
		Whole-school planning for learning
		beyond the school is informed by
		ongoing research into learning
		opportunities, pupils’ and families’
		access to, and use of, ICT. 
		</th>
		<th> <input type="radio" name="17" value="3"/>
		Whole-school planning for learning
		beyond the school takes some
		account of research the school has
		undertaken about learning
		opportunities, pupils’ and families’
		access to, and use of, ICT. 
		</th>
		<th> <input type="radio" name="17" value="4"/>
		Whole-school planning for learning
		beyond the school takes little
		account of any knowledge about
		pupils’ and families’ access to, and
		use of, ICT. 
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Planning to
		promote inclusion </th>
		<th> <input type="radio" name="18" value="1"/> 
		All, or nearly all, staff take a
		proactive role in identifying how ICT
		can be used to enable and broaden
		access to learning within and beyond the school for a wide range of
		learning needs.
		</th>
		<th> <input type="radio" name="18" value="2"/>
		Most staff plan appropriately for ICT
		to support the full range of pupils in
		enabling or widening their access to
		learning. The specific learning needs of many pupils are met, at least in
		part, through the use of ICT. 
		</th>
		<th> <input type="radio" name="18" value="3"/>
		The policy for inclusion fully
		recognises the role of ICT in enabling
		and supporting the learning needs of
		different groups of pupils. Staff are aware of its potential, but do not
		always achieve this in practice. 
		</th>
		<th> <input type="radio" name="18" value="4"/>
		The school’s policy on inclusion pays
		little or no attention to the potential
		of ICT to enable and extend the
		learning of different groups of pupils.Examples of ICT helping pupils to gain
		access to learning are patchy and
		unplanned. 
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Planning for
		e-safety </th>
		<th> <input type="radio" name="19" value="1"/> 
		Systematic planning ensures that
		pupils have opportunities to develop
		both an understanding of their digital
		footprint, e-safeguarding issues and a
		range of e-safety strategies, skills and
		behaviours. Pupils have regular
		opportunities to contribute to e-safeguarding
		policy and practice and
		this is in evidence throughout the
		school. Peer activities are a strong
		feature of e-safety provision. Plans
		are regularly reviewed and updated
		in the light of changing technology,
		risks and practice.
		</th>
		<th> <input type="radio" name="19" value="2"/>
		Effective planning ensures that pupils
		have the opportunities to develop an
		awareness of their digital footprint,
		e-safeguarding issues and the skills
		that enable them to make safe and
		responsible use of ICT. Pupils have
		the opportunity to contribute to e-safety
		policy and provision,
		particularly through peer activities
		</th>
		<th> <input type="radio" name="19" value="3"/>
		Planning provides opportunities for
		pupils to develop an awareness of
		some aspects of e-safety and some of
		the skills needed to make safe and
		responsible use of ICT. Plans are
		being developed to provide
		opportunities for pupils to contribute
		to these programmes.
		</th>
		<th> <input type="radio" name="19" value="4"/>
		Planning has begun to address the
		development of pupils’ e-safety
		awareness and the skills needed to
		make safe and responsible use of ICT.
		This is not yet implemented
		throughout the school.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
						</div>

						<h3><b>Leadership of ICT in the curriculum</b></h3>
						<div>
						<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th>  Leadership
		for the
		development of
		digital capability </th>
		<th> <input type="radio" name="20" value="1"/> 
		Dynamic operational leadership for
		the development of pupils’ digital
		capability, including their e-safety
		education, is set within a whole school
		approach and is led
		strategically by the senior leadership.
		This takes account of pupils’ work
		both within and beyond the school
		and maximises their progress. 
		</th>
		<th> <input type="radio" name="20" value="2"/>
		Effective operational leadership for
		the development of pupils’ digital
		capability, including their e-safety
		education is set within a whole-school
		approach and promoted by
		the senior leadership. This ensures
		pupils’ digital capability is developed
		in a progressive and coherent way.
		</th>
		<th> <input type="radio" name="20" value="3"/>
		Operational leadership for the
		coordinated development of pupils’
		digital capability, including their e-safety
		education is in place and is
		supported by the senior leadership
		</th>
		<th> <input type="radio" name="20" value="4"/>
		There is some operational leadership
		for the development of pupils’ digital
		capability, including their e-safety
		education, but this is not set within a
		whole-school approach supported by
		the senior leadership.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th>  Leadership of
		learning and
		teaching </th>
		<th> <input type="radio" name="21" value="1"/> 
		There is strong leadership at all levels
		which actively encourages the
		development of new and creative
		practices in the use of ICT for
		learning and teaching both within
		and beyond the school. This results inconsistently high-quality
		implementation
		</th>
		<th> <input type="radio" name="21" value="2"/>
		All subject leaders promote an
		agreed whole-school approach to the
		use of ICT both within and beyond
		the school. This is led strategically by
		the senior leadership team and consistently implemented by staff at
		all levels.
		</th>
		<th> <input type="radio" name="21" value="3"/>
		Many subject leaders promote and
		develop the effective use and impact
		of ICT for learning and teaching both
		within and beyond the school. This is
		beginning to be led strategically, with some coordination across the school
		but implementation is variable
		</th>
		<th> <input type="radio" name="21" value="4"/>
		Some staff are aware of, and
		promote the use of ICT for learning
		and teaching within and beyond the
		school. There is no coordinated
		leadership for this across the school.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Evaluating
		learning and
		teaching </th>
		<th> <input type="radio" name="22" value="1"/> 
		The school rigorously evaluates the
		quality of learning and teaching with
		ICT within and beyond the school.
		There is a strong focus on the impact
		on learning processes and the quality
		and range of pupil outcomes.
		Evaluation is central to informing
		future learning and teaching
		</th>
		<th> <input type="radio" name="22" value="2"/>
		The school systematically monitors
		and evaluates the quality of learning
		and teaching with ICT within and
		beyond the school. This includes its
		impact on learning processes and a
		range of pupil outcomes. Evaluation
		is used to inform future learning and
		teaching.
		</th>
		<th> <input type="radio" name="22" value="3"/>
		The school monitors and evaluates
		some aspects of learning and
		teaching with ICT. This tends to focus
		on pupil engagement and motivation
		rather than learning outcomes.
		Evaluation has some impact on
		future learning and teaching.
		</th>
		<th> <input type="radio" name="22" value="4"/>
		Ad hoc monitoring and evaluation
		take place and focus on access,
		resources and superficial outcomes
		rather than impact on learning or
		teaching.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Review of the
		curriculum </th>
		<th> <input type="radio" name="23" value="1" /> 
		Systematic and ongoing review of all
		aspects of ICT planning, practice and
		pupils’ experiences is undertaken in
		order to inform innovative
		curriculum design. Pupils and other
		stakeholders regularly contribute to
		this process.
		</th>
		<th> <input type="radio" name="23" value="2"/>
		There is regular review of planning,
		practice and pupils’ experiences
		covering both digital capability and
		the use of ICT for learning and
		teaching. This influences future
		planning.
		</th>
		<th> <input type="radio" name="23" value="3"/>
		Periodic reviews of planning and
		practice are undertaken. These help
		to inform both the development of
		digital capability and the use of ICT
		for learning and teaching.
		</th>
		<th> <input type="radio" name="23" value="4"/>
		The school has started to review the
		curriculum relating to both digital
		capability and the use of ICT for
		learning and teaching. Results do not
		inform practice or planning in these
		areas.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
						</div>								
					</div>
				</div>
				<div id="tabs-3"><!--Teaching and Learning-->
					<div class="accordion">
						<h3><b>Teaching and the learning process</b></h3>
						<div>
						<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Breadth of
		development for
		digital capability </th>
		<th> <input type="radio" name="24" value="1"/> 
		Teaching enables all, or nearly all,
		pupils to develop and use their digital
		capability with confidence through a
		wide range of appropriate contexts
		and challenging experiences.
		Teaching builds effectively on pupils’
		use of ICT beyond the school.
		</th>
		<th> <input type="radio" name="24" value="2"/>
		Teaching enables most pupils to use
		and develop all aspects of their
		digital capability through a wide
		range of experiences and contexts
		that are consistently matched to
		their needs, abilities and learning
		preferences.
		</th>
		<th> <input type="radio" name="24" value="3"/>
		Teaching provides opportunities that
		enable many pupils to experience
		most aspects of ICT with an
		appropriate balance between
		knowledge, skills and understanding.
		</th>
		<th> <input type="radio" name="24" value="4"/>
		Teaching is inconsistent and pupils
		have a limited range of opportunities
		to develop their digital capability,
		There is an over-emphasis on skill
		development at the expense of
		knowledge and understanding.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Extent of ICT use
		for learning and
		teaching </th>
		<th> <input type="radio" name="25" value="1"/> 
		All, or nearly all staff, make use of ICT
		as an integral and natural part of
		learning and teaching across all
		curriculum areas and year groups.
		</th>
		<th> <input type="radio" name="25" value="2"/>
		Most staff make regular use of ICT to
		support learning and teaching across
		the whole curriculum.
		</th>
		<th> <input type="radio" name="25" value="3"/>
		Many staff make regular use of ICT
		across the curriculum to support
		learning and teaching.
		</th>
		<th> <input type="radio" name="25" value="4"/>
		There are pockets of use of ICT within
		learning and teaching, but provision
		is too dependent on individual
		teachers and/or curriculum areas.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Quality of use of
		ICT for learning
		and teaching </th>
		<th> <input type="radio" name="26" value="1"/> 
		All, or nearly all, staff harness the full
		potential of ICT to enhance and
		extend learning and teaching. They provide opportunities for creative
		and independent learning that
		extends pupils’ capacity to learn
		within and beyond the school
		</th>
		<th> <input type="radio" name="26" value="2"/>
		Most staff use ICT to enhance
		teaching and learning experiences
		with approaches not readily accessible through more traditional
		methods. This leads to significant
		gains in learning.
		</th>
		<th> <input type="radio" name="26" value="3"/>
		Many staff use ICT to engage and
		motivate pupils in their learning
		through active and interactive learning experiences. They use a
		range of approaches and resources
		leading to identifiable gains in
		learning
		</th>
		<th> <input type="radio" name="26" value="4"/>
		ICT is mainly used to replicate
		traditional teaching approaches,
		which results in only superficial gains.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Learning beyond
		the school </th>
		<th> <input type="radio" name="27" value="1"/> 
		ICT is used innovatively to enable
		pupils to continue and extend their
		learning where and when they want.
		Wider curriculum experience is
		enabled through the extended use of
		ICT. Expectations of pupils’ learning
		with ICT beyond school are high and
		such learning is valued and
		celebrated.
		</th>
		<th> <input type="radio" name="27" value="2"/>
		Most staff actively encourage pupils
		to use ICT to continue and/or extend
		their learning beyond the school and
		provide opportunities for them to do
		so.
		</th>
		<th> <input type="radio" name="27" value="3"/>
		Many staff encourage pupils to use
		ICT beyond the school to support
		their learning. They value this and
		understand how such learning can be
		integrated into work in school.
		</th>
		<th> <input type="radio" name="27" value="4"/>
		Some staff encourage pupils to use
		ICT beyond the school to support
		their learning. When pupils
		demonstrate their learning with ICT
		in this way some staff are unsure
		how to respond.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Ongoing critical
		evaluation
		 </th>
		<th> <input type="radio" name="28" value="1"/> 
		All, or nearly all, staff critically
		evaluate the use of ICT in their
		teaching and its impact on pupils’
		learning wherever that takes place.
		Outcomes are routinely shared with
		colleagues within and beyond the
		school. This process is an integral
		part of the school’s reflective culture
		and has a significant impact on
		practice.
		</th>
		<th> <input type="radio" name="28" value="2"/>
		Most staff make regular critical
		evaluations of the use of ICT in their
		teaching and its impact on pupils’
		learning and routinely share
		outcomes with colleagues. This has a
		clear impact on future practice.
		</th>
		<th> <input type="radio" name="28" value="3"/>
		Many staff can critically evaluate the
		use of ICT in their teaching and its
		impact on pupils’ learning, but do not
		do so routinely. Some staff work
		together to share the outcomes of
		critical evaluations and this informs
		future practice.
		</th>
		<th> <input type="radio" name="28" value="4"/>
		Some staff critically evaluate the use
		of ICT in their teaching and its impact
		on pupils’ learning. This has little
		impact on future practice.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
						</div>
						<h3><b>Pupils’ learning experiences</b></h3>
						<div>
						<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Pupils’ progress in
		digital capability  </th>
		<th> <input type="radio" name="29" value="1"/> 
		All, or nearly all, pupils make good
		progress in all areas of digital
		capability throughout the school. 
		</th>
		<th> <input type="radio" name="29" value="2"/>
		Most pupils make good progress in
		all areas of digital capability
		throughout the school. 
		</th>
		<th> <input type="radio" name="29" value="3"/>
		Many pupils make appropriate
		progress in all areas of digital
		capability throughout the school.
		</th>
		<th> <input type="radio" name="29" value="4"/>
		Some pupils make appropriate
		progress in digital capability
		throughout the school, a significant
		number make insufficient progress in
		some areas.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Pupils’ progress
		more widely </th>
		<th> <input type="radio" name="30" value="1"/> 
		ICT has a visible and frequent impact
		on the learning of all, or nearly all, pupils across most curriculum areas
		and in a wide range of contexts.
		</th>
		<th> <input type="radio" name="30" value="2"/>
		Most pupils extend and improve
		much of their learning through a wide range of ICT experiences across
		many curriculum areas and contexts
		</th>
		<th> <input type="radio" name="30" value="3"/>
		Many pupils use ICT to extend and
		improve their learning across a few
		curriculum areas and in a range of contexts. This improves their
		progress in some areas.
		</th>
		<th> <input type="radio" name="30" value="4"/>
		A narrow range of ICT use limits its
		impact on pupils’ progress across
		curriculum areas.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Pupils’
		understanding
		about their
		learning </th>
		<th> <input type="radio" name="31" value="1"/> 
		Pupils have a good understanding of
		the potential of ICT to support and
		enhance learning both within and
		beyond school. Drawing on their own
		experience they can readily identify
		ways in which ICT makes a difference
		to learning and achievement.
		</th>
		<th> <input type="radio" name="31" value="2"/>
		Pupils have some understanding of
		how the use of ICT improves their
		learning both within and beyond the
		school. They are able to illustrate this
		with examples drawn from their own
		learning.
		</th>
		<th> <input type="radio" name="31" value="3"/>
		Pupils are beginning to reflect on
		how ICT supports their learning.
		Some can discuss elements of this
		when prompted, and sometimes use
		examples drawn from their own
		experience.
		</th>
		<th> <input type="radio" name="31" value="4"/>
		Pupils seldom reflect or talk about
		how their use of ICT supports their
		learning. They find it difficult to give
		examples that link ICT practice with
		impact on learning.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Pupils’ confidence
		and independence </th>
		<th> <input type="radio" name="32" value="1"/> 
		All or nearly all pupils have reached
		high levels of confidence and
		independence to apply and develop
		their use of ICT. They make regular
		informed decisions across the
		curriculum about when and how to
		use ICT. They have high expectations
		about using ICT to support their
		learning both within and beyond the
		school.
		</th>
		<th> <input type="radio" name="32" value="2"/>
		Most pupils have reached high levels
		of confidence to apply ICT
		independently and where
		appropriate. They make informed
		decisions across the curriculum about
		when and how to use ICT. They can
		articulate clear expectations about
		using ICT to support their learning.
		</th>
		<th> <input type="radio" name="32" value="3"/>
		Many pupils have the confidence to
		make informed decisions about when
		to use ICT. They are able to make
		independent use of ICT and transfer
		their digital capability to new
		situations. They have growing
		expectations about using ICT to
		support their learning.
		</th>
		<th> <input type="radio" name="32" value="4"/>
		Some pupils make decisions about
		when to employ ICT in some subjects
		but often lack confidence to take
		their learning forward independently
		or to transfer their digital capability
		to new situations. Pupils generally
		have few expectations about using
		ICT as a natural part of their learning.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Effective and safe
		use of digital
		resources </th>
		<th> <input type="radio" name="33" value="1"/> 
		All, or nearly all, pupils consistently
		adopt safe practices both within and
		beyond the school. They have up to
		date knowledge and skills to ensure
		safe and effective use of a wide
		range of digital resources. They apply
		and adapt these to new and
		emerging technologies and
		situations. All pupils fully understand
		their obligations in relation to
		intellectual property rights. When
		working independently pupils
		understand the need to validate
		information and assess content.
		</th>
		<th> <input type="radio" name="33" value="2"/>
		All, or nearly all, pupils understand
		the issues and risks involved in the
		use of ICT. They are aware of school
		policy and the need to adopt
		appropriate and responsible
		behaviours. Most pupils have a good
		range of knowledge and skills to
		enable them to make safe and
		effective use of digital resources both
		within and beyond the school. Pupils
		have an understanding of intellectual
		property rights and content validity
		although this is not consistently
		applied across the school.
		</th>
		<th> <input type="radio" name="33" value="3"/>
		Most pupils are aware of the issues
		and risks involved in the use of ICT
		and are aware of school policy and
		the need to adopt appropriate and
		responsible behaviours. However,
		not all pupils have sufficient
		knowledge and skills to enable them
		to make safe and effective use of
		digital resources. Pupils have limited
		understanding of intellectual
		property rights. Some pupils are
		beginning to understand the
		importance of assessing content for
		validity.
		</th>
		<th> <input type="radio" name="33" value="4"/>
		Some pupils are aware of the issues
		and risks involved in the use of ICT.
		They are aware of the school’s policy
		and the need to adopt appropriate
		and responsible behaviours.
		However, few pupils have sufficient
		knowledge and skills to enable them
		to make safe use of digital resources.
		Pupils have no understanding of their
		obligations in relation to intellectual
		property rights and assessment of
		websites for validity.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Creativity and
		learning skills </th>
		<th> <input type="radio" name="34" value="1"/> 
		For all or nearly all pupils the use of
		ICT, both within and beyond the
		school, significantly improves their
		creativity and ability to investigate,
		solve problems, refine their work,
		learn from their mistakes, collaborate with others and reflect critically on
		their learning. 
		</th>
		<th> <input type="radio" name="34" value="2"/>
		For most pupils the use of ICT in a
		broad range of curriculum areas
		improves their creativity and ability
		to investigate, solve problems, refine
		their work, learn from their mistakes, collaborate with others and reflect
		critically on their learning
		</th>
		<th> <input type="radio" name="34" value="3"/>
		For many pupils the use of ICT in
		some curriculum areas develops their
		creative abilities and their ability to
		research, refine their work, learn
		from their mistakes, collaborate with others and reflect on the quality of
		their work. 
		</th>
		<th> <input type="radio" name="34" value="4"/>
		The use of ICT helps some pupils to
		develop their creative abilities,
		search for information, draft their
		work and pay more attention to
		detail and presentation. Opportunities to do this are limited
		and inconsistent.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Attitudes to
		learning </th>
		<th> <input type="radio" name="35" value="1"/> 
		When using ICT, all or nearly all
		pupils show interest, enthusiasm and
		innovation. They explore the
		potential of ICT to improve their
		work both in and out of school. The
		use of ICT has a major impact on
		their self-esteem, enthusiasm,
		engagement and approach to
		learning within and beyond the
		school. 
		</th>
		<th> <input type="radio" name="35" value="2"/>
		Most pupils are motivated to use ICT
		both in and out of school in order to
		improve their work. ICT has a
		significant influence on self-esteem,
		attitude to learning and capacity for
		independent study.
		</th>
		<th> <input type="radio" name="35" value="3"/>
		The use of ICT helps many pupils to
		improve their motivation and
		supports the development of their
		self-esteem, attitude to learning and
		capacity for independent study.
		</th>
		<th> <input type="radio" name="35" value="4"/>
		For some pupils the use of ICT for
		teaching or learning has a limited
		influence on their self-esteem,
		motivation or general attitude to
		learning.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Behaviour </th>
		<th> <input type="radio" name="36" value="1"/> 
		When using ICT, all or nearly all
		pupils engage with learning activities,
		work effectively with others, sustain
		attention and show tenacity. They
		show sensitivity and respect for the
		work and feelings of other pupils.
		</th>
		<th> <input type="radio" name="36" value="2"/>
		When using ICT, most pupils engage
		with learning activities, work
		effectively with others and generally
		sustain attention. They show
		sensitivity and respect for the work
		and feelings of other pupils.
		</th>
		<th> <input type="radio" name="36" value="3"/>
		When using ICT, many pupils engage
		with learning activities and work
		effectively with others, but some lose
		interest when they encounter a
		problem. They show respect for the
		work and feelings of other pupils.
		</th>
		<th> <input type="radio" name="36" value="4"/>
		When using ICT some pupils engage
		with learning activities and work
		effectively with others, but many lose
		interest when they encounter a
		problem. Some show respect for the
		work and feelings of other pupils.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Contribution of
		pupils  </th>
		<th> <input type="radio" name="37" value="1"/> 
		The culture of the school both allows
		and encourages pupils to play an
		active role in the leadership of the
		development and promotion of the
		use of digital technologies by their
		peers and others within and out of
		school. They will be widely consulted
		and will have some involvement in
		planning and policy making with
		regard to the use of digital
		technologies and e-safety. 
		</th>
		<th> <input type="radio" name="37" value="2"/>
		There are frequent examples of the
		school acknowledging and valuing
		the contribution that pupils can make
		in the development and promotion
		of the use of digital technologies by
		their peers and others within and out
		of school.
		</th>
		<th> <input type="radio" name="37" value="3"/>
		The school acknowledges the skills
		and knowledge of pupils in the use of
		digital technologies and is developing
		more opportunities for them to
		contribute.
		</th>
		<th> <input type="radio" name="37" value="4"/>
		There are a few examples of where
		the school acknowledges the skills
		and knowledge pupils in the use of
		digital technologies and allows the
		pupils to contribute.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
						</div>				
					</div>
				</div>
				<div id="tabs-4"><!--Assessment of digital capability-->
					<div class="accordion">
						<h3><b>Assessment of digital capability</b></h3>
						<div>
						<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Assessment,
		recording and
		reporting of
		digital capability </th>
		<th> <input type="radio" name="38" value="1"/> 
		The assessment and recording of
		digital capability are rigorous, reliable
		and consistent. They are always
		informed by the use of ICT in other
		curriculum areas and by effective
		moderation within, and beyond the
		school. 
		</th>
		<th> <input type="radio" name="38" value="2"/>
		The assessment and recording of
		digital capability are reliable and
		consistent. They are informed by the
		use of ICT in other curriculum areas
		and by moderation within the school.
		</th>
		<th> <input type="radio" name="38" value="3"/>
		The assessment and recording of
		digital capability are informed by
		pupils’ use of ICT in other curriculum
		areas, but there is some variation in
		practice. 
		</th>
		<th> <input type="radio" name="38" value="4"/>
		Some assessment and recording of
		digital capability occur, but are
		inconsistent, uncoordinated and
		rarely takes account of pupils’ use of
		ICT in other curriculum areas. 
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Dialogue </th>
		<th> <input type="radio" name="39" value="1"/> 
		All, or nearly all, staff are confident
		and competent to engage in high-quality,
		detailed dialogue with pupils
		about their use of ICT. This results in
		clear targets for improvement. 
		</th>
		<th> <input type="radio" name="39" value="2"/>
		Most staff are able to engage pupils
		in regular and well-informed
		discussions about their use of ICT and
		how to improve it.
		</th>
		<th> <input type="radio" name="39" value="3"/>
		Many staff are able to engage pupils
		in dialogue that helps them improve
		their use of ICT.
		</th>
		<th> <input type="radio" name="39" value="4"/>
		Some staff are able to engage pupils
		in dialogue to help them improve,
		but only in some aspects of their use
		of ICT. 
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Self and peer
		assessment </th>
		<th> <input type="radio" name="40" value="1"/> 
		Effective and accurate self and peer
		assessment are undertaken
		systematically. This is integral to
		pupils’ learning within, and beyond,
		the school and the development of
		their digital capability.
		</th>
		<th> <input type="radio" name="40" value="2"/>
		Pupils regularly assess their own and
		other pupils’ digital capability based
		on criteria they have identified and
		developed. This contributes to their
		understanding of what constitutes
		good quality and helps them to
		improve.
		</th>
		<th> <input type="radio" name="40" value="3"/>
		Pupils are beginning to develop their
		own criteria for self and peer
		assessment of their digital capability.
		This sometimes helps them to
		understand how their work can be
		improved.
		</th>
		<th> <input type="radio" name="40" value="4"/>
		Pupils are involved in some self-assessment
		of their digital capability,
		but this focuses mainly on ICT skills.
		This has limited impact on
		improvement.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
						</div>
					</div>
				</div>
				<div id="tabs-5">  <!--Professional Development -->
					<div class="accordion">
						<h3><b>Developing and sharing digital capability</b></h3>
						<div>
						<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Identifying needs </th>
		<th> <input type="radio" name="41" value="1"/> 
		There is an embedded culture of
		review and self-review of staff ICT
		competence and needs. This
		incorporates a focus on school
		improvement through the
		implementation of emerging
		technologies and practices.
		Practitioners evaluate impact on
		effective learning, teaching and
		organisational effectiveness.
		</th>
		<th> <input type="radio" name="41" value="2"/>
		Performance management includes a
		regular comprehensive audit of staff
		skills in relation to the effective and
		safe use of ICT in learning, teaching
		and management processes. This
		fully reflects the school’s strategic
		plans and priorities. The quality,
		impact and value for money of ICT
		professional development is
		evaluated.
		</th>
		<th> <input type="radio" name="41" value="3"/>
		Individual staff ICT needs in relation
		to improving learning and teaching
		are identified. Where appropriate
		this is part of the performance
		management process and meeting
		whole-school, organisational needs,
		priorities and vision.
		</th>
		<th> <input type="radio" name="41" value="4"/>
		There is some planning for the
		identification of individual staff ICT
		needs. This is often generated by the
		arrival of new technologies or
		resources and focuses more on ICT
		skills than the use of ICT to improve
		learning and teaching.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Meeting school
		and individual
		needs </th>
		<th> <input type="radio" name="42" value="1"/> 
		All staff are engaged with ICT
		professional development which blend different forms of provision.
		Innovative approaches to individual
		support through coaching and
		mentoring are a key part of ICT
		professional development.
		</th>
		<th> <input type="radio" name="42" value="2"/>
		Staff have access to a wide range of
		ICT professional development opportunities both within and out of
		school. The school makes use of
		external and online support to
		develop staff expertise. Systematic
		support through coaching and
		mentoring is part of planned
		professional development for ICT. 
		</th>
		<th> <input type="radio" name="42" value="3"/>
		ICT professional development
		activities address identified whole school needs and target the
		individual needs of some staff.
		Individual mentoring and coaching is
		provided for most staff, according to
		need.
		</th>
		<th> <input type="radio" name="42" value="4"/>
		ICT professional development
		opportunities take only limited account of individual and specific
		whole-school priorities. Some
		attempt is made to widen the range
		of development opportunities.
		Mentoring or coaching takes place
		when required.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Developing and
		sharing practices
		 </th>
		<th> <input type="radio" name="43" value="1"/> 
		Action research is embedded within a
		strong culture of planned and
		evaluated innovation. All staff are
		encouraged to take calculated risks in
		the creative use of ICT to make
		significant improvements to learning,
		teaching and organisational
		effectiveness. The school supports
		practice in other schools either face-to-face
		or through online
		collaboration.
		</th>
		<th> <input type="radio" name="43" value="2"/>
		Most staff engage in the
		development of new practices with
		ICT. Outcomes are frequently
		incorporated into the school
		curriculum and reflected in whole school
		priorities. The sharing of
		effective practice routinely occurs
		across the school and with other
		schools. 
		</th>
		<th> <input type="radio" name="43" value="3"/>
		Many staff engage in the
		development of new teaching and
		learning practices with ICT.
		Outcomes are incorporated, where
		appropriate, into the curriculum.
		There are processes in place for
		sharing of research and effective
		practice across the school.
		</th>
		<th> <input type="radio" name="43" value="4"/>
		Some staff welcome and try new
		ideas but the outcomes are not
		generally incorporated into future
		curriculum planning on a whole school
		basis. The sharing of effective
		practice using ICT is encouraged on
		an individual level
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Developing good
		e-safety practices </th>
		<th> <input type="radio" name="44" value="1"/> 
		There is a culture in the school where
		staff are encouraged to use, and use,
		digital technologies in innovative
		ways, while being aware of the esafety
		risks. The staff have a clear
		understanding of the boundaries
		between personal and professional
		use of digital technologies, being able
		to protect their professional identity
		online and having the competence
		and confidence to provide good esafety
		guidance to others in their
		lessons and across the school.
		</th>
		<th> <input type="radio" name="44" value="2"/>
		There is an effective focus on
		professional development such that
		most staff are enthusiastic users of
		digital technologies both in their
		teaching and in their personal use.
		They are aware of the e-safety risks
		associated with the use of these
		technologies, know how to keep
		themselves safe and are able to
		provide e-safety guidance for others.
		The school provides opportunities for
		all staff to increase the
		understanding of these issues
		through e-safety training. All staff are
		aware how to protect their
		professional identity online and
		understand the boundaries between
		personal and professional use. 
		</th>
		<th> <input type="radio" name="44" value="3"/>
		There is a more effective focus on
		professional development such that
		most staff are aware of the e-safety
		risks associated with the use of
		digital technologies, know how to
		keep themselves safe and are able to
		provide e-safety guidance for others.
		</th>
		<th> <input type="radio" name="44" value="4"/>
		There is insufficient focus on
		professional development such that
		only some staff are aware of the e-safety
		risks associated with the use of
		digital technologies and know how to
		keep themselves safe and are able to
		provide e-safety guidance for others.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		</div>
		</div>
		</div>
		<div id="tabs-6"> <!--resources-->
		<div class="accordion">
		<h3><b>Provision</b></h3>
		<div>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Physical
		environments </th>
		<th> <input type="radio" name="45" value="1"/> 
		Whole-school approaches to the
		innovative design, adaptation or
		reorganisation of spaces fully reflect
		the school’s vision for ICT. This
		results in more imaginative and
		varied learning, teaching and working
		practices
		</th>
		<th> <input type="radio" name="45" value="2"/>
		Most spaces have been designed,
		adapted or reorganised to reflect the
		school’s vision for ICT. They support a
		range of flexible learning and
		teaching styles and working
		practices.
		</th>
		<th> <input type="radio" name="45" value="3"/>
		Some spaces have been designed,
		adapted or reorganised in a
		coordinated way to provide flexible
		environments that reflect the
		school’s vision for ICT.

		</th>
		<th> <input type="radio" name="45" value="4"/>
		Individual staff have given some
		consideration to the way that their
		space within the school can be
		reorganised to provide a flexible
		environment that reflects the
		contribution of ICT.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Sufficiency,
		suitability and
		availability of
		learning
		technologies </th>
		<th> <input type="radio" name="46" value="1"/> 
		There is a wide range of suitable,
		high-quality ICT resources which are
		sufficient to meet staff and pupils’
		needs wherever and whenever
		learning takes place. These are used
		imaginatively and have a significant
		impact on the culture and ethos of
		the school.

		</th>
		<th> <input type="radio" name="46" value="2"/>
		ICT resources are sufficient in quality,
		quantity, range, suitability,
		curriculum choices and are readily
		available to support learning within
		and beyond the school. These make a
		significant impact on learning,
		teaching and school management.
		The school ensures that there is ICT
		provision for those without access
		beyond the school.
		</th>
		<th> <input type="radio" name="46" value="3"/>
		ICT resources are sufficient in quality,
		quantity, range, suitability,
		curriculum choices and availability to
		make a contribution to the current
		practice in learning, teaching and
		school management. The school is
		taking steps to provide access to
		appropriate ICT resources for those
		without access beyond the school.
		</th>
		<th> <input type="radio" name="46" value="4"/>
		ICT resources are limited in quality,
		quantity, range, suitability,
		curriculum choices and availability
		and therefore have little impact on
		learning, teaching or school
		management. 
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Internal and
		online connectivity </th>
		<th> <input type="radio" name="47" value="1"/> 
		High-quality connectivity provides
		appropriate access to curriculum and
		management resources throughout
		the school and beyond. Regular
		review and updating ensure that new
		and growing demands are met safely
		and securely. This enables innovative
		practice to develop which has a
		significant impact on the learning and
		management culture of the school.
		</th>
		<th> <input type="radio" name="47" value="2"/>
		There is safe, secure, reliable and fast
		internal and online connectivity. This
		provides appropriate access to
		curriculum and management
		resources from many locations within
		the school. Planning recognises the
		need to update infrastructure to
		meet future demands. There is clear
		impact on learning, teaching and
		staff working practices.

		</th>
		<th> <input type="radio" name="47" value="3"/>
		Internal and online connectivity
		provides safe and appropriate access
		to curriculum and management
		resources from many locations within
		the school. Planning ensures that the
		infrastructure can meet the demand.
		There is some impact on learning,
		teaching and staff working practices.
		</th>
		<th> <input type="radio" name="47" value="4"/>
		Internal and online connectivity to
		curriculum and management
		resources is limited and unable to
		meet the needs of many users
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Digital learning
		resources
		 </th>
		<th> <input type="radio" name="48" value="1"/> 
		The school has access to a wide
		range of appropriate, high-quality
		learning technologies. Imaginative
		use of these technologies
		significantly changes the learning
		culture within and beyond the
		school.
		</th>
		<th> <input type="radio" name="48" value="2"/>
		The school has access to a well-planned
		range of appropriate, good
		quality learning technologies that
		make a significant impact on learning
		and teaching.
		</th>
		<th> <input type="radio" name="48" value="3"/>
		The school has access to a good
		range of appropriate learning
		technologies that make a positive
		contribution to learning and
		teaching.
		</th>
		<th> <input type="radio" name="48" value="4"/>
		The school has access to a range of
		learning technologies but these do
		not always meet the needs of the
		curriculum and pupils.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th>  Environments for
		online learning</th>
		<th> <input type="radio" name="49" value="1"/> 
		Environments for online learning
		support a wide range of innovative
		learning activities within and beyond
		the school. Regular review and
		updates incorporate new and
		emerging technologies and practices.
		All stakeholders have opportunities
		to access and exchange appropriate
		information and resources. 
		</th>
		<th> <input type="radio" name="49" value="2"/>
		Environments for online learning
		support a range of learning activities
		within and beyond the school,
		including the use of communication
		and collaboration tools. Online
		access to appropriate information,
		resources and activities is available to
		all stakeholders.
		</th>
		<th> <input type="radio" name="49" value="3"/>
		Environments for online learning
		allow pupils to access, create and
		share content in lessons and beyond
		school. Pupils are able to showcase
		achievement. Parents and carers
		have online access to resources and
		information.

		</th>
		<th> <input type="radio" name="49" value="4"/>
		Environments for online learning
		allow pupils access to content in
		lessons. They are able to access
		curriculum related resources and
		engage in activities.

		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th>Management
		information
		systems   </th>
		<th> <input type="radio" name="50" value="1"/> 
		The school has a fully integrated
		management information system,
		the use of which is subject to regular
		review and improvement. This is
		available to appropriate named staff
		within and beyond the school. Access
		controls have been deployed to all
		information systems and a full risk
		assessment of all information assets
		for which the school is responsible
		has been completed and
		documented. This significantly
		improves the management of the
		school and takes account of its data
		protection responsibility The school
		follows best practice backup
		routines.
		</th>
		<th> <input type="radio" name="50" value="2"/>
		ICT is used effectively to support
		management tasks. Appropriate
		access is readily available across the
		school and widely used by most staff
		to share data and resources. This has
		a clear impact across all management
		areas. Some access controls have
		been applied to information sets but
		a full information risk assessment has
		not been completed. A designated
		person backs up MIS data daily and is
		able to restore it.

		</th>
		<th> <input type="radio" name="50" value="3"/>
		Staff make use of ICT for
		management, administration, finance
		and planning as appropriate. Current
		systems enable staff to share
		resources, access data and contribute
		to databases. The school backs up
		data regularly but restoration is not
		always checked
		</th>
		<th> <input type="radio" name="50" value="4"/>
		The school uses an assortment of ICT
		systems which do not share data.
		Access is only through the school
		office. ICT use is limited to isolated
		aspects of the school’s management
		and much work is still done manually.
		There is no designated person in
		charge of backing up data. Data is
		not always backed up in a daily
		routine and it is sometimes difficult
		to recover data.
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		</div>
		<h3><b>Management of ICT resources</b></h3>
		<div>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Procurement
		 </th>
		<th> <input type="radio" name="51" value="1"/> 
		Procurement is part of a systematic whole-school
		approach to providing ICT resources and services
		which are sustainable in the longer term. Regular
		review of processes ensures good value for money
		minimal environmental impact and the safe disposal
		of electronic equipment and information. Disposal
		procedures exist for all information held on ICT
		devices and in physical form. Procurement regulations
		are followed.

		</th>
		<th> <input type="radio" name="51" value="2"/>
		The procurement of ICT
		resources and services
		follows best practice
		guidelines and takes full
		account of the total cost of
		ownership, value for money
		and procurement regulations.
		Consideration is given to
		environmental impact. There
		are some processes in place
		for the safe disposal of
		electronic equipment and
		information.
		</th>
		<th> <input type="radio" name="51" value="3"/>
		ICT resources are procured
		efficiently with regard to the
		total cost of ownership and
		value for money. Some
		account is taken of
		environmental impact. The
		school has begun to address
		the issue of safe disposal of
		electronic equipment and
		information. Procurement
		regulations are generally
		understood.

		</th>
		<th> <input type="radio" name="51" value="4"/>
		There is some planning for the
		procurement of ICT resources, but
		little account is taken of
		procurement rules, environmental
		impact and the safe disposal of
		electronic equipment and
		information.

		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Technical support </th>
		<th> <input type="radio" name="52" value="1"/> 
		Technical support staff are empowered to explore
		and implement innovative solutions. They contribute
		to the formulation and development of the school’s
		ICT strategy. Systems are in place to manage and
		monitor the performance of technical support.

		</th>
		<th> <input type="radio" name="52" value="2"/>
		Technical support systems are
		provided and managed
		effectively. They are both
		proactive and reactive. The
		school minimises disruption
		to learning and teaching
		caused by technical problems.
		</th>
		<th> <input type="radio" name="52" value="3"/>
		Technical support systems are
		adequate. There is some
		proactive management of
		maintenance. Reported faults
		are responded to in a timely
		fashion
		</th>
		<th> <input type="radio" name="52" value="4"/>
		There is limited access to technical
		support staff and no proactive
		maintenance to reduce the risk of
		technical problems.

		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Information
		security and
		safeguarding </th>
		<th> <input type="radio" name="53" value="1"/> 
		Regularly updated technical and policy solutions
		ensure a safe environment for all users whilst
		maximising learning and teaching opportunities. A full
		information risk assessment has been completed and
		documented. All access to information systems is
		controlled. There is a high level of information
		security on all systems with timely and effective
		disaster recovery procedures in place. All staff are
		aware of the lead professional and receive regular
		information security and safeguarding training and
		updates.

		</th>
		<th> <input type="radio" name="53" value="2"/>
		Technical and policy solutions
		ensure that there is
		safeguarding of the school’s
		ICT systems, without limiting
		opportunities for learning and
		teaching. Information
		(physical and electronic) is
		stored securely on and off site
		and regular reviews ensure
		that these systems remain
		effective. Staff have received
		information security
		awareness training although
		there is no planned or regular
		process.
		</th>
		<th> <input type="radio" name="53" value="3"/>
		Technical and policy solutions
		provide some safeguarding
		for users of the school’s ICT
		systems. These sometimes
		limit opportunities for
		learning and teaching. The
		school is taking steps to
		ensure that information
		(physical and electronic) is
		secure both on and off site.
		Staff have received some
		information security and
		safeguarding awareness
		training.

		</th>
		<th> <input type="radio" name="53" value="4"/>
		The school is aware that it needs to
		safeguard users and secure data. It
		has some technical solutions that
		address these issues but these are
		uncoordinated and at an early
		stage. Staff have received no
		information security awareness
		training
		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		<table border="1" style="width:600px">
		<thead>
		<tr>
		<th></th>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		</tr>
		<thead>
		<tr>
		<th> Evaluation </th>
		<th> <input type="radio" name="54" value="1"/> 
		There is systematic and widespread monitoring and
		evaluation of the use of ICT resources. The outcomes
		underpin the ongoing ICT strategy and procurement and are used to maximise access to learning
		opportunities.
		</th>
		<th> <input type="radio" name="54" value="2"/>
		Regular monitoring and
		evaluation of the use of ICT
		resources within and beyond the school are comprehensive
		and influence ICT strategy
		and future procurement. 
		</th>
		<th> <input type="radio" name="54" value="3"/>
		Monitoring and evaluation of
		the use of ICT resources take
		place and inform the development of ICT strategy
		and future procurement.

		</th>
		<th> <input type="radio" name="54" value="4"/>
		Some ad hoc monitoring and
		evaluation take place, often as a
		reaction to issues related to the quantity of and access to, ICT
		resources.

		</th>
		</tr>
		</thead>
		</table>
		<br>
		<br>
		</div>
		</div>
		</div>
		</div>				
		</div>
		</div>
		</div>
		<input class="buttons" type="submit" name="Submit" value="Submit"/>
		<br><br>
	</form>
	<form  name="unesco" method="post" action="logout.php">
	<input type="submit" name="button" value="Logout" />
	</form>
	<form  name="unesco" method="post" action="principal_result.php">
	<input type="submit" name="button" value="See charts" />
	</form>
</body>
<footer>
</footer>
</html>