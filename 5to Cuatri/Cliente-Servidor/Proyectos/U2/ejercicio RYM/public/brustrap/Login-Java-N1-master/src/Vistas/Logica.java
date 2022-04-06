/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Vistas;

import static java.awt.PageAttributes.MediaType.D;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author CHAPARRO
 */
public class Logica {
    
    public DefaultTableModel mostrarmedicamento()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `medicamentos`";
        
        Connection cn = null;
        
        PreparedStatement pst = null;
        
        ResultSet rs = null;
        
        try
        {
            cn = Conexion.conectar();
            
            pst = cn.prepareStatement(sql);                        
            
            rs = pst.executeQuery();
            
            while(rs.next())
            {
                registros[0] = rs.getString("Nombre");
                
                registros[1] = rs.getString("Gramaje");
                
                registros[2]= rs.getString("Presentacion");
                registros[3] = rs.getString("Clasificacion");
                
                registros[4] = rs.getString("Precio");
                modelo.addRow(registros);
                
            }
            
           
        }
        catch(SQLException e)
        {
            
            JOptionPane.showMessageDialog(null,"Error al conectar");
            
        }
        finally
        {
            try
            {
                if (rs != null) rs.close();
                
                if (pst != null) pst.close();
                
                if (cn != null) cn.close();
            }
            catch(SQLException e)
            {
                JOptionPane.showMessageDialog(null,e);
            }
            
            
        }
        
         return modelo;
    }
    public DefaultTableModel buscarmedicamentos(String buscar)
    {

        int contador = 1; // Dedicado para acomular en número de registros que hay en la tabla
        
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};//Indica el nombre de las columnas en la tabla
        
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null, nombresColumnas);
        
        String sql = "SELECT * FROM medicamentos WHERE Nombre LIKE '%"+buscar+"%' OR Nombre LIKE '%"+buscar+"%'";
        
        Connection cn = null;
        
        PreparedStatement pst = null;
        
        ResultSet rs = null;                           
        
        try
        {
            cn = Conexion.conectar();
            
            pst = cn.prepareStatement(sql);                        
            
            rs = pst.executeQuery();
            
            while(rs.next())
            {
                registros[0] = rs.getString("Nombre");
                
                registros[1] = rs.getString("Gramaje");
                
                registros[2]= rs.getString("Presentacion");
                registros[3] = rs.getString("Clasificacion");
                
                registros[4] = rs.getString("Precio");
                modelo.addRow(registros);
                
                
            }                      
        }
        catch(SQLException e)
        {
            
            JOptionPane.showMessageDialog(null,"Error al conectar. "+e.getMessage());
            
        }
        finally
        {
            try
            {
                if (rs != null) rs.close();
                
                if (pst != null) pst.close();
                
                if (cn != null) cn.close();
            }
            catch(SQLException e)
            {
                JOptionPane.showMessageDialog(null,e);
            }
        }
         return modelo;
    }    
    public DefaultTableModel buscarmedicamentostipo(String buscar)
    {

        int contador = 1; // Dedicado para acomular en número de registros que hay en la tabla
        
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};//Indica el nombre de las columnas en la tabla
        
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null, nombresColumnas);
        
        String sql = "SELECT * FROM medicamentos WHERE Clasificacion LIKE '%"+buscar+"%' OR Clasificacion LIKE '%"+buscar+"%'";
        
        Connection cn = null;
        
        PreparedStatement pst = null;
        
        ResultSet rs = null;                           
        
        try
        {
            cn = Conexion.conectar();
            
            pst = cn.prepareStatement(sql);                        
            
            rs = pst.executeQuery();
            
            while(rs.next())
            {
                registros[0] = rs.getString("Nombre");
                
               registros[1] = rs.getString("Gramaje");
                
                registros[2]= rs.getString("Presentacion");
                registros[3] = rs.getString("Clasificacion");
                
                registros[4] = rs.getString("Precio");
                modelo.addRow(registros);
                
                
            }                      
        }
        catch(SQLException e)
        {
            
            JOptionPane.showMessageDialog(null,"Error al conectar. "+e.getMessage());
            
        }
        finally
        {
            try
            {
                if (rs != null) rs.close();
                
                if (pst != null) pst.close();
                
                if (cn != null) cn.close();
            }
            catch(SQLException e)
            {
                JOptionPane.showMessageDialog(null,e);
            }
        }
         return modelo;
    }    
    
}

