/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberComplementTest {

    @Test
	public void testNumberComplement() throws Exception {
        //Test 1
        int want = 2;
        int got = NumberComplement.findComplement( 5 );
        assertEquals(want, got);
        //Test 2
        want = 0;
        got = NumberComplement.findComplement( 1 );
        assertEquals(want, got);
	}

}
