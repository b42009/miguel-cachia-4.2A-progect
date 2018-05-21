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
    public partial class addEvent : Form
    {
        public void checknum(TextBox naame) {

            int i;
            bool bNum = int.TryParse(naame.Text, out i);
            if (!bNum) { naame.Clear(); MessageBox.Show("onlt numbers plis"); }

            }



        
        public void setupp() {
            string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
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
        string clientid1;
        public addEvent(string clientid)
        {
            this.clientid1 = clientid;
           
            InitializeComponent();
            setupp();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void typebox_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Hide();
            home h1 = new home(clientid1);
            h1.Show();
        }

        private void textBox5_TextChanged(object sender, EventArgs e)
        {
           

        }

        private void comboBox1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            string date = eventdate.Value.ToString("yyyy-MM-dd");
            
            string name = ename.Text;
            string adr= addr.Text;
            string type = typeboxx.Text;
            string tyid = "";
            string imgc = imagcat.Text;
            string imgcid = "";
            string dur = duration.Text;
            string ndate = DateTime.Now.ToString("yyyy-MM-dd");
         //-------------check if it is null and geting the type and imag size id------------------------------
            if (name == "" || adr == "" || dur == "") { MessageBox.Show("fill everyting plis"); }
            else {
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
               
                string query1= "select * from eventtypes where typeName ='"+type+"'";
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
                            string ty= reader.GetString(0);
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
                MessageBox.Show(tyid);
                string query2 = "INSERT INTO event (name,edate,eventDate,addres,type,imgcategory,durationInDays) VALUES ('" + name + "','" + ndate + "','" + date + "',' " + adr + "',"+ tyid + ",'"+ imgcid + "','"+ dur + "')";
                MySqlConnection databaseConnection2 = new MySqlConnection(connectionString);
                MySqlCommand commandDatabase2 = new MySqlCommand(query2, databaseConnection2);
                MySqlDataReader reader2;
                ;
                try
                {
                    databaseConnection2.Open();

                    commandDatabase2.ExecuteReader();
                    MessageBox.Show("the event was created");
                    this.Hide();
                    home h1 = new home(clientid1);
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

        private void eventtype_ValueChanged(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            
        }

        private void textBox6_TextChanged(object sender, EventArgs e)
        {
            checknum(duration);
        }
    }
}
