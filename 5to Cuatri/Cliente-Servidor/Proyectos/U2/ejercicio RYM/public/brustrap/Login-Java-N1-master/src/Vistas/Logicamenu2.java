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
public class Logicamenu2 {
    
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
   public DefaultTableModel vomito()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `vomito`";
        
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
   
    public DefaultTableModel Antineopl??sicos()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antineopl??sicos`";
        
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
   
    public DefaultTableModel Antiinfeccioso ()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antiinfeccioso`";
        
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
  public DefaultTableModel Antimic??tico()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antimic??tico`";
        
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
     
  public DefaultTableModel Antiinflamatorio()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antiinflamatorio`";
        
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
  public DefaultTableModel Antihemorr??gicos()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antihemorr??gicos`";
        
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
     public DefaultTableModel Diur??ticos()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `diur??ticos`";
        
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
     public DefaultTableModel An??stesico()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `an??stesico`";
        
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
      public DefaultTableModel Diabetes()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `diabetes`";
        
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
      public DefaultTableModel Antis??ptico ()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antis??ptico`";
        
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
      public DefaultTableModel Inmunosupresores ()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `inmunosupresores`";
        
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
      public DefaultTableModel Antinauseoso ()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `antinauseoso`";
        
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
      public DefaultTableModel vitaminas()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `vitaminas`";
        
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
        public DefaultTableModel relajantes()
    {
        String []  nombresColumnas = {"Nombre","Gramaje","Presentacion","Clasificacion","Precio"};
        String [] registros = new String[5];
        
        DefaultTableModel modelo = new DefaultTableModel(null,nombresColumnas);
        
        String sql = "SELECT * FROM `relajantes`";
        
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

