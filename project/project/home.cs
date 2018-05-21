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
    public partial class home : Form
    {
        
        public void Setup(string wid) {
           
            string connectionString = "datasource=localhost;port=3306;username=root;password=;database=events;sslMode=none";
            string query = "select name, jobid FROM workers WHERE workerId = '"+wid+"'";
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
                        string name = reader.GetString(0);
                        int widd =  Int32.Parse(reader.GetString(1));
                      

                        label1.Text = label1.Text + " " +name;
                       
                        if ( widd == 2) {
                            addworkers.Hide();
                            showworkers.Hide();

                        }
                       else if (widd == 3){
                            addworkers.Hide();
                            showworkers.Hide();
                            addevent.Hide();
                            showevent.Hide();
                        }

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

        }
        string clientid1;

        public home(string clientid)
        {
            this.clientid1 = clientid;
            InitializeComponent();

            

            Setup(clientid1);

        }

        private void Form2_Load(object sender, EventArgs e)
        {

        }

        private void home_KeyDown(object sender, KeyEventArgs e)
        {

        }

        private void button3_Click(object sender, EventArgs e)
        {
            showworkers s1 = new showworkers(clientid1);
            s1.Show();
            this.Hide();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            addEvent a1 = new addEvent(clientid1);
            a1.Show();
            this.Hide();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            showevent s1 = new showevent(clientid1);
            s1.Show();
            this.Hide();
        }

        private void button6_Click(object sender, EventArgs e)
        {
            addworker w1 = new addworker(clientid1);
            w1.Show();
            this.Hide();
        }

        private void button1_Click_1(object sender, EventArgs e)
        {
            login li = new login();
            li.Show();
            this.Hide();

        }

        private void eventhadiler_Click(object sender, EventArgs e)
        {
            checkinevent c1 = new checkinevent(clientid1);
            c1.Show();
            this.Hide();
        }
    }
}
