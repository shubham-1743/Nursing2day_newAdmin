@extends('student-main.layouts.default')

@section('content')
<div class="page-titles">
    <ol class="breadcrumb">
        <li>
            <h5 class="bc-title">My Study Material</h5>
        </li>
    </ol>
</div>

<!-- Tabs -->
<ul class="nav nav-tabs" id="examTabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="free-tab" data-toggle="tab" href="#free" role="tab">FREE STUDY MATERIAL </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="paid-tab" data-toggle="tab" href="#paid" role="tab">PAID STUDY MATERIAL</a>
    </li>

</ul>

<!-- Tab Content -->
<div class="tab-content mt-3" id="examTabsContent">

    <!-- Free Exam -->
    <div class="tab-pane fade show active" id="free" role="tabpanel">
        <div class="card card-body">
            <h5>Free Study Material</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Subject</th>
                        <th>Topic</th>
                        <th>Stopic</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <img src="{{asset('images/avatar/2.jpg')}}" class="rounded-circle user_img" alt="" style="height: 70px; width: 70px;"></td>
                        <td>Dementia (chronic brain syndrome)</td>
                        <td>Mental Health Nursing</td>
                        <td>Dementia </td>
                        <td>Dementia (Chronic Brain Syndrome)</td>
                        <td><a href="#" data-toggle="modal" data-target="#viewDetailsModal" title="View Details" class="btn btn-info">
                                <span class="fa fa-arrows-alt"></span>
                            </a> </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <!-- Paid Exam -->
    <div class="tab-pane fade" id="paid" role="tabpanel">
        <div class="card card-body">
            <h5>Paid Study Material</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Subject</th>
                        <th>Topic</th>
                        <th>Stopic</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <img src="{{asset('images/avatar/2.jpg')}}" class="rounded-circle user_img" alt="" style="height: 70px; width: 70px;"></td>
                        <td>ANM Study Material</td>
                        <td>ANM</td>
                        <td>ANM Study Material </td>
                        <td>ANM Study Material</td>
                        <td><a href="#" data-toggle="modal" data-target="#viewDetailsModal1" title="View Details" class="btn btn-info">
                                <span class="fa fa-arrows-alt"></span>
                            </a> </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="viewDetailsModal" tabindex="-1" role="dialog" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Study Material Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Payment Details Table -->
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong class="text-primary">Name</strong></td>
                                <td>
                                    <p><strong>Dementia (chronic brain syndrome)</strong></p>
                                </td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Subject</strong></td>
                                <td>Mental Health Nursing</td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Topic</strong></td>
                                <td>Dementia </td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Stopic</strong></td>
                                <td>Dementia (Chronic Brain Syndrome)&gt;</td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Link</strong></td>
                                <td><a target="_blank" href="http://nursing2day.com/exam">http://nursing2day.com/exam</a></td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Description</strong></td>
                                <td>
                                    <p><strong>What is Dementia?</strong></p>
                                    <p>&nbsp;</p>
                                    <p>Dementia is defined by a loss of previous levels of cognitive, executive, and memory function in a state of full alertness (Bourgeois, Seaman, &amp; Servis, 2008).</p>
                                    <p>1. Organic condition characterized in common in old age by development ofmultiple permanent cognitive deficits and progressive impairment of memory.</p>
                                    <p>2. Common cognitive disturbances observe in final stage of dementia they include at least oneof the following: aphasia (language disturbance), Apraxia (impaired ability tocarry out motor activities, despite intact motor function),agnosia (loss of sensory ability to recognizeobjects), or a disturbance in executive functioning and amnesia(loss of memory).</p>
                                    <p>3. Difficulty thinking abstractly, planning, initiating,and completing complex multistep tasks.Eventually, simple tasks become difficult and hasitate.</p>
                                    <p>4. Causes difficulties in social and occupationalfunctioning.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Etiology </strong>&nbsp;<strong>:</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. <strong>Pellagra and Prenatal causes</strong>: congenital cranial anomaly, congenital spastic paraplegia.</p>
                                    <p>2. <strong>Infection</strong>: central nervous system, syphilis, meningoencephalitis, human immunodeficiency virus (HIV).</p>
                                    <p>3. <strong>Intoxication</strong>: drug or poison, alcohol.</p>
                                    <p>4. <strong>Trauma</strong>: brain trauma by gross force, brain surgery.</p>
                                    <p>5. <strong>Circulatory disorder</strong>: cerebral arteriosclerosis.</p>
                                    <p>6. <strong>Disturbance of innervations</strong>: convulsions.</p>
                                    <p>7. <strong>Disturbances of metabolism, growth, or nutrition</strong>.</p>
                                    <p>8. Senile brain disease: dementia and old age .</p>
                                    <p>9. Glandular problems.</p>
                                    <p>10. <strong>New growths</strong>: brain neoplasm.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Types of Degenerative Conditions </strong></p>
                                    <p>&nbsp;</p>
                                    <p><strong>Dementia, Alzheimer’s Type:</strong></p>
                                    <p>1. Most common form and cause of dementia: accounts for majority of known cases due to deficiency of acetylcholine neurotransmitter but Hypothyroidism is the most common form and type of dementia in india.</p>
                                    <p>2. Usually begins after age 65 . Dementia, Alzheimer’s type (DAT) average course is 5 to 10 years but there is variance.</p>
                                    <p>3. Symptoms gradually and progressively worse, irreversible.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Three clinical stages of</strong> <strong>Dementia, Alzheimer’s type <br></strong></p>
                                    <p>&nbsp;</p>
                                    <p><strong>1. Early stage:</strong> Client is forgetful, confused, irritable; catastrophic reaction ,decrease interest in his environment and social activities ,hesitation to perform any task, recent memory loss and unable to take decision begins to notice changes family. duration is 2&nbsp; to 4 year or more.</p>
                                    <p><strong>2. Middle stage:</strong> Increased memory loss, recall of recent events diminishes, activities of daily living (ADLs) become difficult to accomplish. Unable to maintain his bank pass book. Aggressiveness and social inappropriateness present. Aimless Wandering increases. Dejavu(Patient familiar with unknown person ,situation, place and others. Jamisvu(Patient unknown with familiar situation)</p>
                                    <p><strong>3. Late and final stage:</strong> 4AS symptoms like Aphasia, agnosia, Amnesia, Apraxia, severely disoriented, delusional, and paranoid. Client may not speak, forgets family members, and soon becomes helpless.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Multi infraction and Vascular Dementia</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. Type of dementia involving intermittent emboli or infarcts that destroy brain tissue. (Also called ischemic vascular dementia.) Hypertension is also implicated.</p>
                                    <p>2. This form is the second most commonly cause and type of dementia.</p>
                                    <p>3. Characteristics include abrupt onset with numerous remissions and exacerbations; client may also have a history of diseases affecting other organs.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Pick’s Disease</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. This is also known as early and pre senile dementia. That is onset after 45 year of age. This is rare neurodegenerative process where frontal lobe are start shrinking in early age. Characterized by changes in personality early in</p>
                                    <p>course of illness.</p>
                                    <p>2. Similar to Alzheimer’s disease but involvement spares parietal lobes.</p>
                                    <p>3. These clients act dull and lack initiative; otherwise, their disease resembles Alzheimer’s disease.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Huntington’s Chorea</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. Genetically transmitted disorder caused by a single autosomal dominant gene.</p>
                                    <p>2. Onset of symptoms—age 40 to 50 years.</p>
                                    <p>3. Progressive mental and physical deterioration inevitable.</p>
                                    <p>D. Characterized by personality changes with psychotic behaviour, intellectual impairment, Ataxia and, finally, total dementia.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Korsakoff ’s Syndrome</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. A disorder that occurs in chronic alcoholism and is often associated with Wernicke’s encephalopathy. Wernicke’s encephalopathy Acute, life-threatening neurologic condition that can occur as a result of chronic alcoholism (inadequate diet leading to thiamine deficiency).&nbsp; Usual symptoms are cloudy consciousness, impaired immediate&nbsp; memory, staggering gait, slurred speech, ataxia, peripheral neuropathy.</p>
                                    <p>2. Treatment is oral vitamin B complex and thiamine 100 mg intramuscularly (IM) stat if client presents with the above symptoms and has a history of alcohol</p>
                                    <p>3. Korsakoff ’s syndrome is a chronic condition that remains after Wernicke’s &nbsp;is treated.</p>
                                    <p>4. Most important feature is recent memory impairment, especially in learning new information.</p>
                                    <p>5. Confabulation (making up stories and filling gap of memory with imaginated ideas) accompanies memory impairment.</p>
                                    <p>6. Remote Memories for past and life events (date of birth )are not usually affected.</p>
                                    <p>7. Syndrome slightly relief and improves with adequate diet (especially including vitamin B complex and thiamine) but many do not recover fully.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Creutzfeldt–Jakob Disease</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. Suspected to be caused by an infection of a person spread after transplant (cornea) or injection of human growth hormone.</p>
                                    <p>2. A new variant of this disease known as mad cow disease (bovine spongiform encephalopathy [BSE]) was identified in 1996 and may be linked to eating</p>
                                    <p>contaminated beef.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Dementia with Lewy Bodies</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. This form of dementia is named for the development of Lewy bodies in the cerebral cortex.</p>
                                    <p>2. The appearance of Parkinsonism symptoms is caused by effects on the extra pyramidal tract of the CNS.</p>
                                    <p>3. Symptoms include intermittent confusion, lapses of consciousness, and psychiatric problems.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Dementia Due to HIV Disease</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. Presence of a dementia that is a direct consequence of HIV disease.</p>
                                    <p>2. Involves diffuse, multifocal destruction of white matter and subcortical structures.</p>
                                    <p>3. Characterized by forgetfulness, slowness, poor concentration, difficulties with problem solving, and hallucinations.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Assessment:</strong></p>
                                    <p><strong>&nbsp;</strong></p>
                                    <p><strong>&nbsp;1. Cognitive impairment:</strong></p>
                                    <p>&nbsp;</p>
                                    <p>a. Disorientation.</p>
                                    <p>b. Severe loss of memory.</p>
                                    <p>c. Judgment impairment.</p>
                                    <p>d. Loss of capacity to learn.</p>
                                    <p>e. Perceptual disturbances.</p>
                                    <p>f. Decreased attention span.</p>
                                    <p>g. Paranoid ideation.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>2. Affective impairment:</strong></p>
                                    <p>&nbsp;</p>
                                    <p>a. Decreased motivation, interests, and self-concern.</p>
                                    <p>b. Loss of normal inhibitions.</p>
                                    <p>c. Loss of insight.</p>
                                    <p>d. Labile mood, irritableness, and explosiveness.</p>
                                    <p>e. Depression.</p>
                                    <p>f. Withdrawal.</p>
                                    <p>g. Anxiety.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>3. Behavioral impairment.</strong></p>
                                    <p>&nbsp;</p>
                                    <p>a<strong>. </strong>Sundowning syndrome of restlessness, confusion, frequency of urination and disorientation that typically begins in late afternoon and gradually worsens. Clients wander or exhibit other aberrant motor activities (such as pacing).</p>
                                    <p>b. Ritualistic, stereotyped behaviour to deal with environment.</p>
                                    <p>c. Possible combativeness or verbal aggression.</p>
                                    <p>d. Possible inappropriate and regressive behavior.</p>
                                    <p>e. Alterations in sexual drives and activity.</p>
                                    <p>f. Neurotic or psychotic behavior as client’s defenses break down.</p>
                                    <p>g. Assess psychological reactions to organic brain disorder.</p>
                                    <p>h. Change in self-concept.</p>
                                    <p>i. Anger and frustration as reactions to forced change in life role.</p>
                                    <p>j. Denial used as defense.</p>
                                    <p>k. Depression.</p>
                                    <p>&nbsp;l. Assumption of “sick” role by dependency and lack of motivation.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Diagnostic Findings</strong></p>
                                    <p>&nbsp;</p>
                                    <p>Laboratory tests can be performed to rule out other conditions that may cause cognitive impairment.</p>
                                    <ul>
                                        <li><strong>Complete&nbsp;</strong><strong>blood</strong><strong>&nbsp;cell count (CBC).</strong>&nbsp;Abnormalities in complete blood cell count and cobalamin levels require further workup to rule out hematologic disease.</li>
                                        <li><strong>Liver</strong><strong>&nbsp;enzyme levels.</strong>&nbsp;Abnormalities found in screening of liver enzyme levels require further workup to rule out hepatic disease.</li>
                                        <li><strong>Thyroid-stimulating hormone (TSH) levels.</strong>&nbsp;Abnormalities in thyroid-stimulating hormone levels require further workup to rule thyroid disease.</li>
                                        <li><strong>Rapid plasma reagent.</strong>&nbsp;Abnormalities in rapid plasma reagent (RPR) require further workup to rule out syphilis.</li>
                                        <li><strong>HIV serology.</strong>&nbsp;Abnormalities in HIV serology and/or PCR require further workup to rule out HIV/AIDS.</li>
                                        <li><strong>Paraneoplastic antibodies.</strong>&nbsp;Abnormalities in paraneoplastic antibodies require further workup to rule out autoimmune&nbsp;encephalitis.</li>
                                        <li><strong>CSF proteins.</strong>&nbsp;Abnormalities in CSF proteins tau, P-tau, and 14-3-3 require further workup to rule out Creutzfeldt-Jakob disease.</li>
                                    </ul>
                                    <p>&nbsp;</p>
                                    <p><strong>Therapeutic Intervention:</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. Meet client’s physical needs and provide for safety.</p>
                                    <p>2. Establish routine for activities of daily living and assist to patient in his activities to prevent injury and it will help to control the sun downing syndrome.</p>
                                    <p>3. Assure the environment is safe. Prevent use of appliances, for example, to prevent injury. &nbsp;Help client maintain contact with reality.</p>
                                    <p>4. Assist client in accepting the diagnosis.</p>
                                    <p>5. Maintain therapeutic communication.</p>
                                    <p>6. During denial phase, listen and accept; do not argue.</p>
                                    <p>7. Assist development of awareness.</p>
                                    <p>8. Help client develop the ability to cope with his or her altered identity.</p>
                                    <p>9. Focus interactions with client and establish consistent contact.</p>
                                    <p>10Maintain reality orientation by allowing client to talk about his or her past and to confabulation filling in memory gap with a made-up response (lie) to protect one’s self-esteem.</p>
                                    <p>11. Provide activities that increase success of client.</p>
                                    <p>12. Occupational therapy.</p>
                                    <p>13. Monitor medications for dementia management.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Acetyl cholinesterase inhibitors.</strong></p>
                                    <p>&nbsp;</p>
                                    <p>a. Inhibits the enzyme acetylcholinesterase, which slows the breakdown of</p>
                                    <p>acetylcholine, thereby allowing more information to be transmitted from one cell to another.</p>
                                    <p>b. Memory and general cognitive activity increases, thus slowing the progression of dementia, especially early in the process of the disease.</p>
                                    <p>c. Commonly used drugs in the category are Aricept (donepezil), which slows</p>
                                    <p>breakdown of brain chemical acetylcholine vital for transmission of nerve signals, Exelon (rivastigmine), and Razadyne (galantamine).</p>
                                    <p>d. These drugs have both positive and negative results and must be individualized client.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Namenda (memantine) for treatment of moderate</strong></p>
                                    <p>&nbsp;</p>
                                    <p>a. Temporarily delays worsening of symptoms.</p>
                                    <p>b. Side effects: headache, constipation, confusion, dizziness.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Depressive symptoms for dementia.</strong></p>
                                    <p>&nbsp;</p>
                                    <p>a. SSRIs appear to be more efficacious— Celexa (citalopram), Prozac (fluoxetine), and Zoloft (sertraline).</p>
                                    <p>b. Evidence fewer side effects than other antidepressants.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Psychosis and dementia.</strong></p>
                                    <p>&nbsp;</p>
                                    <p>a. If psychotic thoughts are present, medication may be required. It is important</p>
                                    <p>to differentiate medication side effects (Namenda for example) from disease</p>
                                    <p>b. When psychosis is associated with violence or dangerous behavior, medication, often short-acting benzodiazepines starting with low doses, is often utilized but sparingly and for short periods of time.</p>
                                    <p>c. For chronic aggressive behavior, Risperdal (risperidone) may be effective. Dosing is individualized and always at lowest dose to achieve benefits. Goal should be to reduce or discontinue medication if possible.</p>
                                    <p>d. Seroquel (quetiapine) is also effective and does not worsen cognition.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Anger and aggression.</strong></p>
                                    <p>&nbsp;</p>
                                    <p>a. For an acute episode, redirection or other nonmedicinal strategies should be attempted before medication is utilized.</p>
                                    <p>b. For gradually evolving tendencies or if a comorbidity of a mood disorder is present, Depakote (valproic acid) (125 mg bid with gradual increases as needed) may be administered.</p>
                                    <p>&nbsp;</p>
                                    <p><strong>Supportive therapy:</strong></p>
                                    <p>&nbsp;</p>
                                    <p>1. According to priority protect from injury and Identification band should be provide to patient Update conferences with treatment team.</p>
                                    <p>2. Involve client in treatment planning as able.</p>
                                    <p>3. Involve family and community in treatment and rehabilitation program.</p>
                                    <p>4. Encourage and arrange community groups (church groups, volunteer societies, and school groups) to visit on units and provide family photo album.</p>
                                    <p>5. Refer family to support services.</p>
                                    <p>6. Allow and encourage personalization of client’sroom and environment.</p>
                                    <p>7. Dress client in his or her own clothing.</p>
                                    <p>8. Maintain client’s cleanliness: clothes, hair, and person.</p>
                                    <p>9. Do not isolate client from others on the unit.</p>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="viewDetailsModal1" tabindex="-1" role="dialog" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Study Material Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong class="text-primary">Name</strong></td>
                                <td>ANM Study Materials</td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Subject</strong></td>
                                <td>ANM </td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Topic</strong></td>
                                <td>ANM Study Materials</td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Stopic</strong></td>
                                <td>ANM Study Materials&gt;</td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Link</strong></td>
                                <td><a target="_blank" href="####">####</a></td>
                            </tr>

                            <tr>
                                <td><strong class="text-primary">Description</strong></td>
                                <td>ANM Study Materials</td>
                            </tr>


                            <tr>
                                <td><strong class="text-primary">PDF</strong></td>
                                <td>
                                    <iframe src="" width="100%" height="500px">
                                </td>
                            </tr>
                    </table>

                </div>
            </div>
        </div>
    </div></iframe></td>
    </tr>
    </tbody>
    </table>

</div>
</div>
</div>
</div>


</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
