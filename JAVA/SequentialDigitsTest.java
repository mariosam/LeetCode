/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class SequentialDigitsTest {

    @Test
	public void testSequentialDigits() throws Exception {
        //Test 1
        List<Integer> want = new ArrayList<>();
        want.add(123);
        want.add(234);
        List<Integer> got = SequentialDigits.sequentialDigits( 100, 300 );
        assertEquals(want, got);
        //Test 2
        want = new ArrayList<>();
        want.add(1234);
        want.add(2345);
        want.add(3456);
        want.add(4567);
        want.add(5678);
        want.add(6789);
        want.add(12345);
        got = SequentialDigits.sequentialDigits( 1000, 13000 );
        assertEquals(want, got);
	}

}
