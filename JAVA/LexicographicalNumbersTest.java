/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertArrayEquals;

import java.util.ArrayList;
import java.util.List;

import org.junit.Test;

public class LexicographicalNumbersTest {

    @Test
	public void testLexicographicalNumbers() throws Exception {
        //Test 1
        List<Integer> want = new ArrayList<Integer>();
        want.add(1);
        want.add(10);
        want.add(11);
        want.add(12);
        want.add(13);
        want.add(2);
        want.add(3);
        want.add(4);
        want.add(5);
        want.add(6);
        want.add(7);
        want.add(8);
        want.add(9);
        List<Integer> got = LexicographicalNumbers.lexicalOrder( 13 );
        assertArrayEquals(want.toArray(), got.toArray());
        //Test 2
        want = new ArrayList<Integer>();
        want.add(1);
        want.add(2);
        got = LexicographicalNumbers.lexicalOrder( 2 );
        assertArrayEquals(want.toArray(), got.toArray());
	}

}
