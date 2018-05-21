namespace project
{
    partial class addEvent
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(addEvent));
            this.pictureBox1 = new System.Windows.Forms.PictureBox();
            this.label1 = new System.Windows.Forms.Label();
            this.ename = new System.Windows.Forms.TextBox();
            this.label2 = new System.Windows.Forms.Label();
            this.label3 = new System.Windows.Forms.Label();
            this.label4 = new System.Windows.Forms.Label();
            this.label7 = new System.Windows.Forms.Label();
            this.label8 = new System.Windows.Forms.Label();
            this.addr = new System.Windows.Forms.TextBox();
            this.duration = new System.Windows.Forms.TextBox();
            this.typeboxx = new System.Windows.Forms.ComboBox();
            this.button1 = new System.Windows.Forms.Button();
            this.imagcat = new System.Windows.Forms.ComboBox();
            this.eventdate = new System.Windows.Forms.DateTimePicker();
            this.button2 = new System.Windows.Forms.Button();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).BeginInit();
            this.SuspendLayout();
            // 
            // pictureBox1
            // 
            this.pictureBox1.BackColor = System.Drawing.Color.DodgerBlue;
            this.pictureBox1.Image = ((System.Drawing.Image)(resources.GetObject("pictureBox1.Image")));
            this.pictureBox1.Location = new System.Drawing.Point(342, -3);
            this.pictureBox1.Name = "pictureBox1";
            this.pictureBox1.Size = new System.Drawing.Size(180, 180);
            this.pictureBox1.TabIndex = 6;
            this.pictureBox1.TabStop = false;
            // 
            // label1
            // 
            this.label1.AutoSize = true;
            this.label1.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label1.Location = new System.Drawing.Point(164, 180);
            this.label1.Name = "label1";
            this.label1.Size = new System.Drawing.Size(185, 33);
            this.label1.TabIndex = 7;
            this.label1.Text = "Event Name";
            this.label1.Click += new System.EventHandler(this.label1_Click);
            // 
            // ename
            // 
            this.ename.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.ename.Location = new System.Drawing.Point(170, 216);
            this.ename.Name = "ename";
            this.ename.Size = new System.Drawing.Size(392, 31);
            this.ename.TabIndex = 8;
            this.ename.TextChanged += new System.EventHandler(this.textBox1_TextChanged);
            // 
            // label2
            // 
            this.label2.AutoSize = true;
            this.label2.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label2.Location = new System.Drawing.Point(164, 250);
            this.label2.Name = "label2";
            this.label2.Size = new System.Drawing.Size(168, 33);
            this.label2.TabIndex = 9;
            this.label2.Text = "Event Date";
            // 
            // label3
            // 
            this.label3.AutoSize = true;
            this.label3.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label3.Location = new System.Drawing.Point(164, 317);
            this.label3.Name = "label3";
            this.label3.Size = new System.Drawing.Size(129, 33);
            this.label3.TabIndex = 10;
            this.label3.Text = "Address";
            // 
            // label4
            // 
            this.label4.AutoSize = true;
            this.label4.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label4.Location = new System.Drawing.Point(164, 381);
            this.label4.Name = "label4";
            this.label4.Size = new System.Drawing.Size(84, 33);
            this.label4.TabIndex = 11;
            this.label4.Text = "Type";
            // 
            // label7
            // 
            this.label7.AutoSize = true;
            this.label7.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label7.Location = new System.Drawing.Point(164, 586);
            this.label7.Name = "label7";
            this.label7.Size = new System.Drawing.Size(248, 33);
            this.label7.TabIndex = 14;
            this.label7.Text = "Duration of Days";
            // 
            // label8
            // 
            this.label8.AutoSize = true;
            this.label8.Font = new System.Drawing.Font("Microsoft Sans Serif", 21.75F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.label8.Location = new System.Drawing.Point(164, 470);
            this.label8.Name = "label8";
            this.label8.Size = new System.Drawing.Size(247, 33);
            this.label8.TabIndex = 15;
            this.label8.Text = "Image Catergory";
            // 
            // addr
            // 
            this.addr.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.addr.Location = new System.Drawing.Point(170, 353);
            this.addr.Name = "addr";
            this.addr.Size = new System.Drawing.Size(392, 31);
            this.addr.TabIndex = 17;
            // 
            // duration
            // 
            this.duration.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.duration.Location = new System.Drawing.Point(170, 631);
            this.duration.Name = "duration";
            this.duration.Size = new System.Drawing.Size(392, 31);
            this.duration.TabIndex = 20;
            this.duration.TextChanged += new System.EventHandler(this.textBox6_TextChanged);
            // 
            // typeboxx
            // 
            this.typeboxx.DisplayMember = "mig";
            this.typeboxx.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F);
            this.typeboxx.FormattingEnabled = true;
            this.typeboxx.Location = new System.Drawing.Point(170, 417);
            this.typeboxx.Name = "typeboxx";
            this.typeboxx.Size = new System.Drawing.Size(392, 33);
            this.typeboxx.TabIndex = 21;
            this.typeboxx.SelectedIndexChanged += new System.EventHandler(this.typebox_SelectedIndexChanged);
            // 
            // button1
            // 
            this.button1.Location = new System.Drawing.Point(724, 684);
            this.button1.Name = "button1";
            this.button1.Size = new System.Drawing.Size(158, 42);
            this.button1.TabIndex = 22;
            this.button1.Text = "Back";
            this.button1.UseVisualStyleBackColor = true;
            this.button1.Click += new System.EventHandler(this.button1_Click);
            // 
            // imagcat
            // 
            this.imagcat.DisplayMember = "mig";
            this.imagcat.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F);
            this.imagcat.FormattingEnabled = true;
            this.imagcat.Location = new System.Drawing.Point(170, 529);
            this.imagcat.Name = "imagcat";
            this.imagcat.Size = new System.Drawing.Size(392, 33);
            this.imagcat.TabIndex = 23;
            this.imagcat.SelectedIndexChanged += new System.EventHandler(this.comboBox1_SelectedIndexChanged);
            // 
            // eventdate
            // 
            this.eventdate.CustomFormat = "yyyy-mm-dd";
            this.eventdate.Font = new System.Drawing.Font("Microsoft Sans Serif", 15.75F);
            this.eventdate.Location = new System.Drawing.Point(170, 286);
            this.eventdate.Name = "eventdate";
            this.eventdate.Size = new System.Drawing.Size(392, 31);
            this.eventdate.TabIndex = 24;
            this.eventdate.ValueChanged += new System.EventHandler(this.eventtype_ValueChanged);
            // 
            // button2
            // 
            this.button2.Location = new System.Drawing.Point(495, 684);
            this.button2.Name = "button2";
            this.button2.Size = new System.Drawing.Size(158, 42);
            this.button2.TabIndex = 25;
            this.button2.Text = "Creat";
            this.button2.UseVisualStyleBackColor = true;
            this.button2.Click += new System.EventHandler(this.button2_Click);
            // 
            // addEvent
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.Color.DodgerBlue;
            this.ClientSize = new System.Drawing.Size(924, 738);
            this.Controls.Add(this.button2);
            this.Controls.Add(this.eventdate);
            this.Controls.Add(this.imagcat);
            this.Controls.Add(this.button1);
            this.Controls.Add(this.typeboxx);
            this.Controls.Add(this.duration);
            this.Controls.Add(this.addr);
            this.Controls.Add(this.label8);
            this.Controls.Add(this.label7);
            this.Controls.Add(this.label4);
            this.Controls.Add(this.label3);
            this.Controls.Add(this.label2);
            this.Controls.Add(this.ename);
            this.Controls.Add(this.label1);
            this.Controls.Add(this.pictureBox1);
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.Name = "addEvent";
            this.Text = "addEvent";
            ((System.ComponentModel.ISupportInitialize)(this.pictureBox1)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.PictureBox pictureBox1;
        private System.Windows.Forms.Label label1;
        private System.Windows.Forms.TextBox ename;
        private System.Windows.Forms.Label label2;
        private System.Windows.Forms.Label label3;
        private System.Windows.Forms.Label label4;
        private System.Windows.Forms.Label label7;
        private System.Windows.Forms.Label label8;
        private System.Windows.Forms.TextBox addr;
        private System.Windows.Forms.TextBox duration;
        private System.Windows.Forms.ComboBox typeboxx;
        private System.Windows.Forms.Button button1;
        private System.Windows.Forms.ComboBox imagcat;
        private System.Windows.Forms.DateTimePicker eventdate;
        private System.Windows.Forms.Button button2;
    }
}