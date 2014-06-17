<?php

#http://gihyo.jp/dev/serial/01/machine-learning/0011
class Linear_Regression {
    function  __construct() {
        return;
    }
    /*
     * functions for learning
     *
     */
    // override me
    function get_phi($x) {
        return array(1, $x, pow($x, 2), pow($x, 3));
    }
    function get_phi_array($x_list) {
        $result = array();
        foreach ($xlist as $x) {
            $result[] = $this->get_phi($x);
        }
        return $result;
    }
    function get_w($phi, $t) {
        
        //return np.dot(np.linalg.inv(np.dot(PHI.T, PHI)), np.dot(PHI.T, t))
    }
    function learn() {
        $xlist = array(0.02, 0.12, 0.19, 0.27, 0.42, 0.51, 0.64, 0.84, 0.88, 0.99);
        $tlist = array(0.05, 0.87, 0.94, 0.92, 0.54, -0.11, -0.78, -0.89, -0.79, -0.04);
        //self._plt.plot(X, t, 'o')
        $phi = $this->get_phi_array($xlist);
        $w = $this->get_w($phi, $tlist);
        return $w;
    }
    /*
     * functions for regression
     *
     */
    function f($w, $x) {
        
        //return np.dot(w, self._phi(x))
    }
    function regression($w) { // $xlist = np.arange(0, 1, 0.01)):
        $ylist = array();
        foreach ($xlist as $x) {
            $ylist[] = $this->f($w, $x);
        }
        //self._plt.plot(xlist, ylist)
        return $ylist;
    }
    function show_plot() {

        //self._plt.show()
    }
}

function main() {
    $lr = Linear_Regression();
    // learn with default training data
    $w = $lr->learn();
    # regression
    $ylist = $lr->regression($w);
    $lr.show_plot();
}

