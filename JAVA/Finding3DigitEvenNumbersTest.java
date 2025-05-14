/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;
import org.junit.Test;

public class Finding3DigitEvenNumbersTest {

    @Test
	public void testFinding3DigitEvenNumbers() throws Exception {
        //Test 1
        int[] want = new int[]{102,120,130,132,210,230,302,310,312,320};
        int[] got = Finding3DigitEvenNumbers.findEvenNumbers( new int[]{2,1,3,0} );
        assertArrayEquals(want, got);
        //Test 2
        want = new int[]{222,228,282,288,822,828,882};
        got = Finding3DigitEvenNumbers.findEvenNumbers( new int[]{2,2,8,8,2} );
        assertArrayEquals(want, got);
        //Test 3
        want = new int[]{};
        got = Finding3DigitEvenNumbers.findEvenNumbers( new int[]{3,7,5} );
        assertArrayEquals(want, got);
	}

}
