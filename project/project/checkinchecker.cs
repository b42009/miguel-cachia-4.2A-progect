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
    public partial class checkinchecker : Form
    {
        string evid;
        string clientid1;
        public checkinchecker(string clientid, string evid)
        {
            this.clientid1 = clientid;
            this.evid = evid;
            InitializeComponent();
        }

        private void checkinchecker_Load(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
            string query = "SELECT checkIn,tiketId FROM ticket where eventId ='" + evid + "' and tiketCode =  '" + code.Text + "' and cliantId IS NOT NULL ";
            MySqlConnection databaseConnection = new MySqlConnection(connectionString);
            MySqlCommand commandDatabase = new MySqlCommand(query, databaseConnection);


          
            try
            {
                databaseConnection.Open();

                MySqlDataReader reader = commandDatabase.ExecuteReader();

                if (reader.HasRows)
                {
                    while (reader.Read())
                    {
                        MessageBox.Show(reader.GetString(0));
                        if (reader.GetString(0) == "False") {
                            


                            string query1 = " UPDATE ticket SET checkIn  = '1' WHERE tiketId = '" + reader.GetInt32(1).ToString() + "'  ; ";
                            MySqlConnection databaseConnection1 = new MySqlConnection(connectionString);
                            databaseConnection1.Open();
                            MySqlCommand commandDatabase1 = new MySqlCommand(query1, databaseConnection1);


                          
                            try
                            {
                            

                                commandDatabase1.ExecuteReader();
                                MessageBox.Show("Good");






                                databaseConnection1.Close();

                            }
                            catch (Exception ex)
                            {
                                MessageBox.Show(ex.ToString());
                                MessageBox.Show("Problem with Query");
                            }
                        }
                        else { MessageBox.Show("already checked in"); }

                    }
                }
                else
                {
                    MessageBox.Show("tickit Dos not exist");
                }


                databaseConnection.Close();
            }
            catch (Exception ex)
            {
                MessageBox.Show(ex.ToString());
                MessageBox.Show("Problem with Query");
            }
        } 

        private void button2_Click(object sender, EventArgs e)
        {
            checkinevent sh = new checkinevent(clientid1);
            sh.Show();
            this.Hide();
        }
    }
}
