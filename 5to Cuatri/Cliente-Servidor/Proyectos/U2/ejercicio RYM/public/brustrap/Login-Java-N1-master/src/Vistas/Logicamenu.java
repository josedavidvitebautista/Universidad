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
public class Logicamenu {
    
   public DefaultTableModel hormona()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `hormona_sexual`";
        
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
    
   public DefaultTableModel antiviral()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antivirales`";
        
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
    
     public DefaultTableModel antianemico()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antianemico`";
        
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
     public DefaultTableModel antibiotico()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antibiotico`";
        
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
      public DefaultTableModel terapia()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `terapia`";
        
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
       public DefaultTableModel sustituto()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `sustituto`";
        
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
       
        public DefaultTableModel Antihipertensivo()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antihipertensivo`";
        
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
        public DefaultTableModel Antibacterianos()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antibacterianos`";
        
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
        public DefaultTableModel Sueros()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `sueros`";
        
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
    
    
        public DefaultTableModel Antiséptico  ()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `sueros`";
        
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
}

