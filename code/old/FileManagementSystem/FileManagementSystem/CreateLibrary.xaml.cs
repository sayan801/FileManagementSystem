using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace FileManagementSystem
{
    /// <summary>
    /// Interaction logic for CreateLibrary.xaml
    /// </summary>
    public partial class CreateLibrary : Window
    {
        public CreateLibrary()
        {
            InitializeComponent();
        }

        private void browseBtn_Click(object sender, RoutedEventArgs e)
        {
            Microsoft.Win32.OpenFileDialog ofd = new Microsoft.Win32.OpenFileDialog();

            if (ofd.ShowDialog() == true)
            {

            }
        }

        private void createBtn_Click(object sender, RoutedEventArgs e)
        {
        }

        private void cancelBtn_Click(object sender, RoutedEventArgs e)
        {
            this.Close();
        }
    }
}
