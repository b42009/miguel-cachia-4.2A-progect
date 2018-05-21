using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace project
{
    public partial class updateDelev : Form
    {
        string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
        string clientid1;
        string evid;

        public void checknum(TextBox naame)
        {

            int i;
            bool bNum = int.TryParse(naame.Text, out i);
            if (!bNum) { naame.Clear(); MessageBox.Show("onlt numbers plis"); }

        }




        public void setupp()
        {

            string query = "select * FROM eventtypes";
            MySqlConnection databaseConnection = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase = new MySqlCommand(query, databaseConnection);
            MySqlDataReader reader;
            
            try
            {
                databaseConnection.Open();

                reader = commandDatabase.ExecuteReader();

                if (reader.HasRows)
                {
                    while (reader.Read())
                    {
                        string name = reader.GetString(1);
                        typeboxx.Items.Add(name);

                    }
                }
                else
                {
                    MessageBox.Show("No results found!");
                }


                databaseConnection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
                MessageBox.Show("Problem with Query");
            }
            //--------------------------------------------------------------------------------------------------------------
            string query1 = "select * FROM imagcategory ";
            MySqlConnection databaseConnection1 = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase1 = new MySqlCommand(query1, databaseConnection1);
            MySqlDataReader reader1;
            
            try
            {
                databaseConnection1.Open();

                reader1 = commandDatabase1.ExecuteReader();

                if (reader1.HasRows)
                {
                    while (reader1.Read())
                    {
                        string name1 = reader1.GetString(1);
                        imagcat.Items.Add(name1);

                    }
                }
                else
                {
                    MessageBox.Show("No results found!");
                }


                databaseConnection1.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
                MessageBox.Show("Problem with Query");
            }
        }


        public updateDelev(string clientid, string evid)
        {
            this.clientid1 = clientid;
            this.evid = evid;
            InitializeComponent();
            setupp();
            string query1 = "select * FROM event where eventId = '" + evid + "'  ";
            MySqlConnection databaseConnection1 = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase1 = new MySqlCommand(query1, databaseConnection1);
            MySqlDataReader reader1;
            
            try
            {
                databaseConnection1.Open();

                reader1 = commandDatabase1.ExecuteReader();

                if (reader1.HasRows)
                {
                    while (reader1.Read())
                    {

                       
                        DateTime dt = DateTime.Parse(reader1.GetString(4));
                        string dv = dt.ToString("yyyy-mm-dd");

                        eventdate.Value = dt;

                        ename.Text = reader1.GetString(1);
                        addr.Text = reader1.GetString(5);



                        duration.Text = reader1.GetString(9);
                        //---------------------------------------------------------------------------------------------
                        string query5 = "select * FROM imagcategory  where id ='" + reader1.GetString(8) + "' ";
                        MySqlConnection databaseConnection5 = new MySqlConnection(connectionString);
                        MySqlCommand commandDatabase5 = new MySqlCommand(query5, databaseConnection5);
                        MySqlDataReader reader5;
                       
                        try
                        {
                            databaseConnection5.Open();

                            reader5 = commandDatabase5.ExecuteReader();

                            if (reader5.HasRows)
                            {
                                while (reader5.Read())
                                {
                                    
                                    imagcat.SelectedItem = reader5.GetString(1);
                                }
                            }
                            else
                            {
                                MessageBox.Show("No results found!");
                            }


                            databaseConnection5.Close();
                        }
                        catch (Exception ex)
                        {
                            MessageBox.Show(ex.ToString());
                            MessageBox.Show("Problem with Query5");
                        }
                        //-------------------------------------------------------------------------------------
                        string query6 = "select * FROM eventtypes  where typeId ='" + reader1.GetString(7) + "' ";
                        MySqlConnection databaseConnection6 = new MySqlConnection(connectionString);
                        MySqlCommand commandDatabase6 = new MySqlCommand(query6, databaseConnection6);
                        MySqlDataReader reader6;
                       
                        try
                        {
                            databaseConnection6.Open();

                            reader6 = commandDatabase6.ExecuteReader();

                            if (reader6.HasRows)
                            {
                                while (reader6.Read())
                                {
                                    
                                    typeboxx.SelectedItem = reader6.GetString(1);
                                }
                            }
                            else
                            {
                                MessageBox.Show("No results found!");
                            }


                            databaseConnection5.Close();
                        }
                        catch (Exception ex)
                        {
                            MessageBox.Show(ex.ToString());
                            MessageBox.Show("Problem with Query5");
                        }
                    }



                }

                else
                {
                    MessageBox.Show("No results found!");
                }


                databaseConnection1.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
                MessageBox.Show("Problem with Query");
            }
        }

        private void updateDelev_Load(object sender, EventArgs e)
        {

        }
        private void textBox6_TextChanged(object sender, EventArgs e)
        {
            checknum(duration);
        }

        private void button1_Click(object sender, EventArgs e)
        {
            showevent sh = new showevent(clientid1);
            sh.Show();
            this.Hide();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            string date = eventdate.Value.ToString("yyyy-MM-dd");

            string name = ename.Text;
            string adr = addr.Text;
            string type = typeboxx.Text;
            string tyid = "";
            string imgc = imagcat.Text;
            string imgcid = "";
            string dur = duration.Text;
            string ndate = DateTime.Now.ToString("yyyy-MM-dd");
            //-------------check if it is null and geting the type and imag size id------------------------------
            //-------------check if it is null and geting the type and imag size id------------------------------
            if (name == "" || adr == "" || dur == "") { MessageBox.Show("fill everyting plis"); }
            else
            {
                string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
                string query10 = "select * from imagcategory where categoryname ='" + imgc + "'";
                MySqlConnection databaseConnection10 = new MySqlConnection(connectionString);
                MySqlCommand commandDatabase = new MySqlCommand(query10, databaseConnection10);
                MySqlDataReader reader0;
              
                try
                {
                    databaseConnection10.Open();

                    reader0 = commandDatabase.ExecuteReader();

                    if (reader0.HasRows)
                    {
                        while (reader0.Read())
                        {
                            string m = reader0.GetString(0);
                            imgcid = m;

                        }
                    }
                    else
                    {
                        MessageBox.Show("No results found!");
                    }


                    databaseConnection10.Close();
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.ToString());
                    MessageBox.Show("Problem with Query");
                }
                //===============================================================================

                string query1 = "select * from eventtypes where typeName ='" + type + "'";
                MySqlConnection databaseConnection1 = new MySqlConnection(connectionString);
                MySqlCommand commandDatabase1 = new MySqlCommand(query1, databaseConnection1);
                MySqlDataReader reader;
              
                try
                {
                    databaseConnection1.Open();

                    reader = commandDatabase1.ExecuteReader();

                    if (reader.HasRows)
                    {
                        while (reader.Read())
                        {
                            string ty = reader.GetString(0);
                            tyid = ty;

                        }
                    }
                    else
                    {
                        MessageBox.Show("No results found!");
                    }


                    databaseConnection1.Close();
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.ToString());
                    MessageBox.Show("Problem with Query");
                }
                //----------------------------------------------------------------------------------------------------------------------------------------------------------------
                string query2 = "UPDATE event set name = '" + name + "',edate ='" + ndate + "',eventDate = '" + date + "',addres =' " + adr + "',type = '" + tyid + "',imgcategory='" + imgcid + "',durationInDays='" + dur + "' where eventId ='"+ evid + "'  ";
                MySqlConnection databaseConnection2 = new MySqlConnection(connectionString);
                MySqlCommand commandDatabase2 = new MySqlCommand(query2, databaseConnection2);
                MySqlDataReader reader2;
                
                try
                {
                    databaseConnection2.Open();

                    commandDatabase2.ExecuteReader();
                    MessageBox.Show("the event has ben changed");
                    this.Hide();
                    showevent h1 = new showevent(clientid1);
                    h1.Show();





                    databaseConnection2.Close();
                }
                catch (Exception ex)
                {
                    MessageBox.Show(ex.ToString());
                    MessageBox.Show("Problem with Query");
                }

            }
        }

        private void Delit_Click(object sender, EventArgs e)
        {
            string query7 = " DELETE FROM event where eventId ='" + evid + "'  ";
            MySqlConnection databaseConnection7 = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase7 = new MySqlCommand(query7, databaseConnection7);
            MySqlDataReader reader7;
           
            try
            {
                databaseConnection7.Open();

                commandDatabase7.ExecuteReader();
                MessageBox.Show("the event has ben Delited");
                this.Hide();
                showevent h1 = new showevent(clientid1);
                h1.Show();





                databaseConnection7.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
                MessageBox.Show("Problem with Query");
            }

        }
    }

}
    

