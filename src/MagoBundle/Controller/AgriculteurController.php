<?php

namespace MagoBundle\Controller;

use MagoBundle\Entity\Agriculteur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Agriculteur controller.
 *
 */
class AgriculteurController extends Controller
{
    /**
     * Lists all agriculteur entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agriculteurs = $em->getRepository('MagoBundle:Agriculteur')->findAll();

        return $this->render('agriculteur/index.html.twig', array(
            'agriculteurs' => $agriculteurs,
        ));
    }

    /**
     * Creates a new agriculteur entity.
     *
     */
    public function newAction(Request $request)
    {
        $agriculteur = new Agriculteur();
        $form = $this->createForm('MagoBundle\Form\AgriculteurType', $agriculteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agriculteur);
            $em->flush();

            return $this->redirectToRoute('_show', array('id' => $agriculteur->getId()));
        }

        return $this->render('agriculteur/new.html.twig', array(
            'agriculteur' => $agriculteur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a agriculteur entity.
     *
     */
    public function showAction(Agriculteur $agriculteur)
    {
        $deleteForm = $this->createDeleteForm($agriculteur);

        return $this->render('agriculteur/show.html.twig', array(
            'agriculteur' => $agriculteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing agriculteur entity.
     *
     */
    public function editAction(Request $request, Agriculteur $agriculteur)
    {
        $deleteForm = $this->createDeleteForm($agriculteur);
        $editForm = $this->createForm('MagoBundle\Form\AgriculteurType', $agriculteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('_edit', array('id' => $agriculteur->getId()));
        }

        return $this->render('agriculteur/edit.html.twig', array(
            'agriculteur' => $agriculteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a agriculteur entity.
     *
     */
    public function deleteAction(Request $request, Agriculteur $agriculteur)
    {
        $form = $this->createDeleteForm($agriculteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($agriculteur);
            $em->flush();
        }

        return $this->redirectToRoute('_index');
    }

    /**
     * Creates a form to delete a agriculteur entity.
     *
     * @param Agriculteur $agriculteur The agriculteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agriculteur $agriculteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('_delete', array('id' => $agriculteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
