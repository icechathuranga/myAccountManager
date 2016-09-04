<?php

/*
 * OrangeHRM Enterprise is a closed sourced comprehensive Human Resource Management (HRM)
 * System that captures all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM Inc is the owner of the patent, copyright, trade secrets, trademarks and any
 * other intellectual property rights which subsist in the Licensed Materials. OrangeHRM Inc
 * is the owner of the media / downloaded OrangeHRM Enterprise software files on which the
 * Licensed Materials are received. Title to the Licensed Materials and media shall remain
 * vested in OrangeHRM Inc. For the avoidance of doubt title and all intellectual property
 * rights to any design, new software, new protocol, new interface, enhancement, update,
 * derivative works, revised screen text or any other items that OrangeHRM Inc creates for
 * Customer shall remain vested in OrangeHRM Inc. Any rights not expressly granted herein are
 * reserved to OrangeHRM Inc.
 *
 * Please refer http://www.orangehrm.com/Files/OrangeHRM_Commercial_License.pdf for the license which includes terms and conditions on using this software.
 *
 */

namespace APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use APIBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * [UsersController]
 * 
 * Description of UsersController
 *
 * @author  Nuwan Chathuranga <nuwan@orangehrm.us.com>
 */
class UsersController extends FOSRestController {

    /**
     * @api
     * @ApiDoc(
     *  resource = true,
     *  description = "Users related CRUD operations",
     *  input = "",
     *  views={},
     *  requirements = {
     *  })
     * 
     * @return array
     * @View()
     */
    public function getUsersAction() {
        $users = $this->getDoctrine()->getRepository('APIBundle:User')->findAll();
        return array('users' => $users);
    }

    /**
     *
     * @param User $user
     * @return array
     * @View()
     * @ParamConverter("user", class="APIBundle:User")
     *
     * @api
     * @ApiDoc(
     *  resource = true,
     *  description = "User related CRUD operations",
     *  input = "APIBundle\Entity\User",
     *  views={},
     *  requirements = {
     *      {
     *          "name" = "$user",
     *          "dataType" = "integer",
     *          "requirement" = "\w",
     *          "description" = "Base on the user id this method will return a user object"
     *      }
     *  })
     * 
     */
    public function getUserAction(User $user) {
        return array('user' => $user);
    }

    /**
     * @return array
     * @View()
     * @param User $user
     * @ParamConverter("user", class="APIBundle:User")
     */
    public function patchUserAction(User $user) {
        return array('user' => $user);
    }

    /**
     * @return array
     * @View()
     * @param User $user
     * @ParamConverter("user", class="APIBundle:User")
     */
    public function deleteUserAction(User $user) {
        $id = $user->getId();
        $this->getDoctrine()->getManager()->remove($user);
        $this->getDoctrine()->getManager()->flush();
        return array('deleted' => $id);
    }

    /**
     * @return array
     * @View()     
     * 
     */
    public function postUserAction() {
//        echo $this->getParameter('username');
//        die('herer');
        $this->getDoctrine()->getManager()->persist($user);
        $this->getDoctrine()->getManager()->flush();
        return array('user' => $user);
    }

}
