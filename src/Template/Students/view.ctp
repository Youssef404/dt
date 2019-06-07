<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>


        <div class="x_content">
            <ul class="list-unstyled timeline">
                <li>
                    <div class="block">
                        <div class="tags">
                            <a href="" class="tag">
                                <span>ETUDIANT</span>
                            </a>
                        </div>
                        <div class="block_content">
                            <h2 class="title">
                                <a>a propos d'etudiant</a>
                            </h2>
                            <table class="vertical-table">
                                <tr>
                                    <th scope="row"><?= __('First Name') ?></th>
                                    <td>:   <?= h($student->first_name) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Last Name') ?></th>
                                    <td>:  <?= h($student->last_name) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Phone Number') ?></th>
                                    <td>:  <?= h($student->phone_number  ) ?></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </li>

            </ul>
            <ul class="list-unstyled timeline">
                <li>
                    <div class="block">
                        <div class="tags">
                            <a href="" class="tag">
                                <span>ECOLE</span>
                            </a>
                        </div>
                        <div class="block_content">
                            <h2 class="title">
                                <a>a propos d'etablissement</a>
                            </h2>
                            <table class="vertical-table">
                                <tr>
                                    <th scope="row"><?= __('Establishment') ?></th>
                                    <td>: <?= $student->has('establishment') ? $this->Html->link($student->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $student->establishment->id]) : '' ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Scolarship') ?></th>
                                    <td>: <?= h($student->scolarship) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Level') ?></th>
                                    <td>: <?= h($student->level) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Major') ?></th>
                                    <td>: <?= $student->has('major') ? $this->Html->link($student->major->id, ['controller' => 'Majors', 'action' => 'view', $student->major->id]) : '' ?></td>
                                </tr>

                            </table>

                        </div>
                    </div>
                </li>

            </ul>
            <h2></h2>
            <ul class="list-unstyled timeline">
                <li>
                    <div class="block">
                        <div class="tags">
                            <a href="" class="tag">
                                <span>TUTEUR</span>
                            </a>
                        </div>
                        <div class="block_content">
                            <h2 class="title">
                                <a>a propos du titeur</a>
                            </h2>
                            <table class="vertical-table">
                                <tr>
                                    <th scope="row"><?= __('Tutor First Name') ?></th>
                                    <td>: <?= h($student->tutor_first_name) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Tutor Last Name') ?></th>
                                    <td>: <?= h($student->tutor_last_name) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Tutor Job') ?></th>
                                    <td>: <?= h($student->tutor_job) ?></td>
                                </tr>
                                <tr>
                                    <th scope="row"><?= __('Tutor Phone Number') ?></th>
                                    <td>: <?= h($student->tutor_phone_number) ?></td>
                                </tr>
                            </table>

                        </div>
                    </div>
                </li>

            </ul>

        </div>



