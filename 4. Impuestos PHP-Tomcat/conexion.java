/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author Yoi
 */
public class conexion extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    // usuario yoi 
    // contraseña 123456
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        // Establecer el tipo de contenido de la respuesta
        response.setContentType("text/html;charset=UTF-8");

        // Obtener el código catastral enviado desde el formulario
        String codigoC = request.getParameter("codigoC");
        String mensaje = "";
        if (codigoC != null && codigoC.length() > 0) {
                // Obtener el primer número del código
                char primerNumero = codigoC.charAt(0);
                // Determinar el mensaje basado en el primer número
                switch (primerNumero) {
                    case '1':
                        mensaje = "Impuesto Alto";
                        break;
                    case '2':
                        mensaje = "Impuesto Medio";
                        break;
                    case '3':
                        mensaje = "Impuesto Bajo";
                        break;
                    default:
                        mensaje = "Código no válido";
                        break;
                }
        }
        
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
             out.println("<title>Resultados de Impuestos</title>");
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Bienvenido a Impuestos"+"</h1>");
            out.println("<h2>Su codigo de impuesto es el siguiente:"+"</h2>");
            out.println("<p>Código: " + codigoC + "</p>");
            
            out.println("<p>" + mensaje + "</p>");
            out.println("</body>");
            out.println("</html>");
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
