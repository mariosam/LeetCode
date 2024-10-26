/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class ParsingABooleanExpressionTest {

    @Test
	public void testParsingABooleanExpression() throws Exception {
        //Test 1
        boolean want = false;
        boolean got = ParsingABooleanExpression.parseBoolExpr( "&(|(f))" );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = ParsingABooleanExpression.parseBoolExpr( "|(f,f,f,t)" );
        assertEquals(want, got);
        //Test 3
        want = true;
        got = ParsingABooleanExpression.parseBoolExpr( "!(&(f,t))" );
        assertEquals(want, got);
	}

}
